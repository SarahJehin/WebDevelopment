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
        $participants = User::where('is_admin', 0)->where('is_active', 1)->paginate(15);
        
        return view('participants', ['participants' => $participants]);
    }
    
    public function participant_details($id) {
        //
        $participant = User::find($id);
        //dd($participant);
        return view('participant_info', ['participant' => $participant]);
    }
    
    
    public function disqualify_participant($id) {
        //
        $disqualified_participant = User::find($id);
        $disqualified_participant->is_disqualified = 1;
        $disqualified_participant->save();
        
        return redirect('admin/participants');
    }
    
    public function requalify_participant($id) {
        //
        $requalified_participant = User::find($id);
        $requalified_participant->is_disqualified = 0;
        $requalified_participant->save();
        
        return redirect('admin/participants');
    }
    
    public function delete_participant($id) {
        //
        $deleted_participant = User::find($id);
        $deleted_participant->is_active = 0;
        $deleted_participant->save();
    }
    
}
