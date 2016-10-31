<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;
use \App\Console\Commands\addUser;

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
        
        $schedule->command('add:winners')->->cron('32 18 31 10 * 2016');
        
        /*$schedule->command('test:test')
         ->everyMinute()
         ->sendOutputTo(base_path() . '/public/output_files/test.txt');
         */
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
