<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use \App\Console\Commands\addUser;
use \App\Period;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
         '\App\Console\Commands\AddWinners',
         '\App\Console\Commands\Test'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        
        //$schedule->command('add:winners')->everyMinute();
        
        //$schedule->command('add:winners')->cron('00 18 31 10 * *');
        
        /*$schedule->command('test:test')
         ->everyMinute()
         ->sendOutputTo(base_path() . '/public/output_files/test.txt');
         */
        
        //$schedule->command('add:winners')->cron('50 12 01 11 * *');
        
        $periods = Period::all();
        
        foreach($periods as $period) {
            
            $enddate_month = explode('-', $period->enddate)[1];
            $enddate_day = explode(' ', explode('-', $period->enddate)[2])[0];
            //echo("maand: " . $enddate_month . " en dag " . $enddate_day . "<br>");
            $schedule->command('add:winners')->cron('40 22 ' . $enddate_day . ' ' . $enddate_month . ' * *');
        }
        
        
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
