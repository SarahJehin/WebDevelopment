<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class AdminController extends Controller
{
    //
    
    
    public function get_participants() {
        //
        $participants = User::where('is_admin', 0)->where('is_active', 1)->get();
        
        return view('participants', ['participants' => $participants]);
    }
    
}
