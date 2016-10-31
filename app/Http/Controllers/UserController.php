<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class UserController extends Controller
{
    //
    
    
    
    public function get_account_info()
    {
        return view('user_info');
    }
    
    public function update_account(Request $request) {
        //dd($request);
        
        $user = User::find(Auth::user()->id);
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->email = $request->email;
        $user->street = $request->street;
        $user->number = $request->number;
        $user->zipcode = $request->zipcode;
        $user->city = $request->city;
        $user->country = $request->country;
        
        $allowed_extensions = ["jpeg", "png"];
        if ($request->hasFile("photo") && $request->file("photo")->isValid()) {
            
            $file = $request->file("photo");
            //check whether file extension is valid
            if (in_array($file->guessClientExtension(), $allowed_extensions)) {
                //the time stamp will be added to uploaded images to prevent identical names
                $timestamp = time();
                //create new file name
                $new_file_name = $timestamp . $file->getClientOriginalName();
                //everything ok? -> save image on server
                $file->move(base_path() . '/public/images/profile_pics/', $new_file_name);
                $image = $new_file_name;
                $user->photo = $image;
            }
        }
        
        $user->save();
        
        return redirect('user/account_info');
    }
    
    
    public function get_rules() {
        return view('user_rules');
    }
    
}
