<?php

namespace App\Http\Controllers;

use App\Models\Credential;
use Illuminate\Http\Request;
use Auth;

class CredentialController extends Controller
{
    public function save(Request $request)
    {
        // some code
        
        $id = Auth::user()->id;
        $rowCount=0;
       
        $request->validate([
            'email' => 'required',
            'name'    => 'required',
            'password'    => 'required|min:16',
        ]);
        $email = $request->email;
        if (Credential::where('email', $email)->where('user_id', $id)->count() == 0) {
            
            $item = new Credential();
            $item->email = $request->email;
            $item->name = $request->name;
            $item->password = $request->password;
            $item->user_id = $id;
           
            $item->save();
            $rowCount++;
            
            $name = $item->name;
            $email = $item->email;
            $password = $item->password;
            $env_update = $this->changeEnv([
                'MAIL_USERNAME'   => $email,
                'MAIL_PASSWORD'   => $password,
                'MAIL_FROM_ADDRESS' => $email,
                'MAIL_FROM_NAME' => $name,
            ]);
            
            if ($env_update) {
             
                return redirect()->back()->with('message', 'Email Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Error');
            }
        }
        else{
            return redirect()->back()->with('error', 'Email already exists');
        }

    }

    protected function changeEnv($data = array())
    {
        if (count($data) > 0) {


            // Read .env-file
            $env = file_get_contents(base_path() . '/.env');
                 Artisan::call('optimize:clear');
            // Split string on every " " and write into array
            $env = preg_split('/\s+/', $env);;

            // Loop through given data
            foreach ((array)$data as $key => $value) {

                // Loop through .env-data
                foreach ($env as $env_key => $env_value) {

                    // Turn the value into an array and stop after the first split
                    // So it's not possible to split e.g. the App-Key by accident
                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if ($entry[0] == $key) {
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            // Turn the array back to an String
            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);

            return true;
        } else {
            return false;
        }
    }
}
