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
    
    
    public function get_rules() {
        return view('user_rules');
    }
    
}
