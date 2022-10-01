<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Leads;
use App\Models\Email;
use App\Models\Mails;
use App\Mail\TestEmail;
use DB;
use App\Models\Schedule;
use App\Models\Sequence;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MailImport;
use App\Exports\MailExport;
use App\Models\Credential;

use Auth;
use App\Http\Controllers\CredentialController;
use Illuminate\Support\Facades\Artisan;

class CampaignController extends Controller
{
    public function index()
    {

        $info = Campaign::all();
		$date = "";
		//   dd($date);
        //   $date = Campaign::find(1)->created_at->format('Y-m-d');
		//   dd($date);
        return view('campaigns.index',compact('info','date'));
            // ->with(compact('info'))
            // ->with(compact('date'));
    }
    public function create(Request $request)
    {
        $info = new Campaign;

        $request->validate([
            'name'    => 'required',

        ]);
        $info->name = $request->name;
        $info->save();
        return redirect()->back()->with('success', 'Campaign Created Successfully');
    }
    public function addmail(Request $request)
    {
        $id = $request->campaign_id;
        $email = $request->email;
        $rowCount = 0;

        $request->validate([
            'email'    => 'required',
            'name'    => 'required',
        ]);

        if (Mails::where('email', $email)->where('campaign_id', $id)->count() == 0) {

            $item = new Mails();
            $item->email = $request->email;
            $item->name = $request->name;
            $item->campaign_id = $request->campaign_id;
            $item->save();
            $rowCount++;
        } else {
            // dd('123');
            return redirect()->back()->with('error', 'Email already Exist');
        }

        return redirect()->back()->with('success', 'Email Added Successfully');
    }

    public function sendMail(Request $request)
    {
        $email = $request->email;
        //  dd($email);
        $id = $request->campaign_id;
        $user_id = Auth::user()->id;

        $check = Credential::where('user_id', $user_id)->exists();
         
        if ($check == true) {
            $c = Credential::where('user_id', $user_id)->where('email', $email)->first();
           
            $name = $c->name;
            $email = $c->email;
            $password = $c->password;
            $env_update = $this->changeEnv([
                'MAIL_USERNAME'   => $email,
                'MAIL_PASSWORD'   => $password,
                'MAIL_FROM_ADDRESS' => $email,
                'MAIL_FROM_NAME' => $name,
            ]);

            if ($env_update) {
            //    dd('123');
                $info = Sequence::where('campaign_id', $id)->first();
                $subject = $info->subject;
                $body = $info->description;
                $details = [
                    'subject' => $subject,
                    'body' => $body,
                    'campaign_id' => $id,
                ];
                
                $job = (new \App\Jobs\SendQueueEmail($details))
                    ->delay(now());
                   
                dispatch($job);
                

                return redirect()->back()->with('success', 'Mail Send Successfully');
            }
            
             else {
                return redirect()->back()->with('error', 'Error');
            }
        }
        else {
            return redirect()->back()->with('error', 'You have not added any email yet');
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

    public function leads($id)
    {

        $info = Mails::where('campaign_id', $id)->get();
        $count = count($info);

        return view('campaigns.leads')
            ->with(compact('info'))
            ->with(compact('count'));
    }
    public function sequence($id)
    {

        $check = Sequence::where('campaign_id', $id)->exists();


        if ($check == false) {
            return view('campaigns.sequence');
        } else {
            $info = Sequence::where('campaign_id', $id)->first();
            return view('campaigns.edit')
                ->with(compact('info'));
        }
    }
    public function schedule($id)
    {
        return view('campaigns.scheduleadd');
    }
    public function fileImport(Request $request)
    {
        $campaign_id = $request->campaign_id;


        if ($request->hasFile('file')) {
            if ($request->file->getClientOriginalExtension() == 'csv') {

                Excel::import(new MailImport($campaign_id), request()->file('file'));
                return redirect()->back()->with('success', 'Data Imported Successfully');
            } else {
                return redirect()->back()->with('error', 'Error in file extension');
            }
        } else {
            return redirect()->back()->with('error', 'File not found');
        }
    }
    public function fileExport(Request $request)
    {
        $campaign_id = $request->campaign_id;
        return Excel::download(new MailExport($campaign_id), 'email.csv');
    }
    public function saveSchedule(Request $request)
    {

        $m = $request->has('monday') ? 1 : 0;
        $t = $request->has('tuesday') ? 1 : 0;
        $w = $request->has('wednesday') ? 1 : 0;
        $th = $request->has('thursday') ? 1 : 0;
        $f = $request->has('friday') ? 1 : 0;
        $s = $request->has('saturday') ? 1 : 0;
        $sun = $request->has('sunday') ? 1 : 0;

        $info = new Schedule;
        $request->validate([
            'start_time'    => 'required',
            'end_time'    => 'required',


        ]);
        $info->start_time = $request->start_time;
        $info->end_time = $request->end_time;
        $info->monday = $m;
        $info->tuesday = $t;
        $info->wednesday = $w;
        $info->thursday = $th;
        $info->friday = $f;
        $info->saturday = $s;
        $info->sunday = $sun;
        $info->campaign_id = $request->id;
        $info->save();

        return redirect()->back()->with('message', 'Schedule Created Successfully');
    }

    public function options($id)
    {

        $user_id = Auth::user()->id;
        $info = Leads::where('id', $id)->first();
        $data = Credential::where('user_id', $user_id)->get();
        return view('campaigns.option')
            ->with(compact('info'))
            ->with(compact('data'));
    }

    public function update(Request $request)
    {
        
        // dd('178');
        $request->validate([
            'subject'    => 'required',
            'description' => 'required',
            

        ]);

         $id = $request->campaign_id;
        //  dd($id);
        $mail = Sequence::find($id);
    //    dd($mail);
        $mail->subject = $request->subject;
        $mail->description = $request->description;
        $mail->save();
        return redirect()->back()
            ->with('message', 'Updated successfully');
    }

    public function storemail(Request $request)
    {

        $info = new Sequence();

        $request->validate([
            'subject'    => 'required',
            'description'    => 'required',

        ]);
        $info->subject = $request->subject;
        $info->description = $request->description;
        $info->campaign_id = $request->campaign_id;
        $info->save();
        return redirect()->back()->with('message', 'Mail Saved Successfully');
    }


    public function deleteCampaign($id)
    {

        DB::table('campaigns')->where('id', $id)->delete();
        return redirect()->back()
            ->with('success', 'Deleted successfully');
    }
    public function destroy($id)
    {

        DB::table('mails')->where('id', $id)->delete();
        return redirect()->back()
            ->with('success', 'Deleted successfully');
    }
}
