<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Winners_Periods;
use App\User;
use Mail;

class WelcomeController extends Controller
{
    //
    
    public function welcome() {
        //
        $winners_periods = Winners_Periods::has('user')->with('user')->has('period')->with('period')->get();
        
        //dd($winners_periods);
        
        return view('welcome', ['winners_periods' => $winners_periods]);
    }
    
    public function test() {
        $winners = User::where('quiz_score', '>', 0)->where('is_disqualified', 0)->orderBy('quiz_score', 'desc')->limit(3)->get();
        
        dd($winners);
        return view('test2', ['period' => "idk", 'winners' => $winners]);
        
    }
    
}
