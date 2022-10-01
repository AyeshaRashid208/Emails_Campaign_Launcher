<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Auth;
class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $check = User::where('id', $id)->exists();


    if ($check == false) {
       
        return view('profile.index');
    } else {
        $info = User::where('id', $id)->first();
        return view('profile.show')
            ->with(compact('info'));
    }
       
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $info = User::where('id', $id)->first();
        return view('profile.edit')
            ->with(compact('info'));
   
       
    }

    

    public function create(Request $request)
    {

       $info = new Profile;
       $request->validate([
        'image'    => 'required',
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'country' => 'required',

    ]);
    $user_id = Auth::user()->id;
     
    $info->firstname = $request->firstname;
    $info->lastname = $request->lastname;
    $info->email = $request->email;
    $info->phone = $request->phone;
    $info->country = $request->country;
    $info->user_id = $user_id;
    if ($request->hasfile('image')) {
        $destination = 'images/faces' . $info->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('images/faces', $filename);
        $info->image = $filename;
    } else {
        unset($info->image);
    }
    $info->save();
    return redirect()->back()
        ->with('message', 'Profile saved successfully');
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        // dd( $request->first_name);
        $request->validate([
           
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
         
            

        ]);
        $info = User::find($id);
        $info->first_name = $request->first_name;
        $info->last_name = $request->last_name;
        $info->email = $request->email;  
        $info->country = $request->country;
        $info->phone = $request->phone;
        $info->designation = $request->designation;
        $info->save();
        return redirect()->back()
            ->with('message', 'Profile updated successfully');
         }
  
}
