<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Winners_Periods;
use App\User;
use App\Period;
use Mail;

class WelcomeController extends Controller
{
    //
    
    public function welcome() {
        //
        $winners_periods = Winners_Periods::has('user')->with('user')->has('period')->with('period')->get();
        $periods = Period::all();
        //dd($winners_periods);
        
        return view('welcome', ['winners_periods' => $winners_periods, 'periods' => $periods]);
    }
    
    public function test() {
        //$winners = User::where('quiz_score', '>', 0)->where('is_disqualified', 0)->orderBy('quiz_score', 'desc')->limit(3)->get();
        
        //dd($winners);
        
        //dd(phpinfo());
        
        $periods = Period::all();
        
        foreach($periods as $period) {
            
            $enddate_month = explode('-', $period->enddate)[1];
            $enddate_day = explode(' ', explode('-', $period->enddate)[2])[0];
            echo("maand: " . $enddate_month . " en dag " . $enddate_day . "<br>");
        }
        
        //return view('test2', ['period' => "idk", 'winners' => $winners]);
        
    }
    
    public function mail() {
        $user = User::find(1)->toArray();
        Mail::send('emails.winners_mail', ['user' => $user], function($message) use ($user) {
            $message->to('sarah.jehin@belgacom.net');
            $message->subject('Mailgun Testing E-mail');
        });
        dd('Mail Send Successfully');
    }
    
}
