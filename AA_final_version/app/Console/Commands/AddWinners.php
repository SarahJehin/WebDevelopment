<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;
use App\User;
use App\Winners_Periods;
use App\Period;
use Mail;

class AddWinners extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:winners';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check period winners and add them to the winners table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //add winners to winners_table
        $winners = User::where('quiz_score', '>', 0)->where('is_disqualified', 0)->orderBy('quiz_score', 'desc')->limit(3)->get();
        $period = $this->get_current_period();
        foreach($winners as $winner) {
            $winner_period = new Winners_Periods([
                'period_id' => $period,
                'winner_id' => $winner->id,
                'is_active' => 1,
            ]);

            $winner_period->save();
         }
        
        //reset all participants score, so they can play again in the next period
        $participants = User::all();
        foreach($participants as $participant) {
            $participant->quiz_score = 0;
            $participant->save();
        }
        
        Mail::send('emails.mailEvent', ['users' => $winners], function($message) use ($winners) {
            $message->to('sarah.jehin@student.kdg.be');
            $message->subject('Periode winnaars!');
        });
        //dd('Mail Send Successfully');
        
    }
    
    public function get_current_period() {
        
        date_default_timezone_set('Europe/Brussels');
        $current_date = date('Y-m-d H:i:s');
        
        $periodnr = "";
        $periods = Period::all();
        foreach($periods as $period) {
            if (($current_date >= $period->startdate) && ($current_date <= $period->enddate)) {
              $periodnr = $period->id;
            }
        }
        return $periodnr;
        
    }
    
}
