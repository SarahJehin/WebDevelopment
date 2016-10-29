<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Period;

class PeriodController extends Controller
{
    //
    
    
    
    public function get_periods() {
        //
        $periods = Period::all();
        //dd($periods);
        //dd(explode(" ", $periods[0]->startdate)[0]);
        return view('set_periods', ['periods' => $periods]);
    }
    
    
    
    public function update_period(Request $request) {
        //
        
        $period = Period::find($request->period_id);
        
        $period->startdate = $request->startdate . " " . $request->starttime;
        $period->enddate = $request->enddate . " " . $request->endtime;
        
        //dd($period);
        
        $period->save();
        
        return redirect('admin/set_periods')->with('msg', "Periode succesvol aangepast");
        
    }
    
}
