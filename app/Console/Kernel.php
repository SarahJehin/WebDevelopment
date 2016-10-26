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
         '\App\Console\Commands\addUser'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        
        
        
         /*$schedule->call(function () {
            DB::table('users')->insert(
                ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'johndoe@test.com', 'phone' => '0123456789']
            );
        })->everyMinute();*/
        
        //$schedule->command('user:add')->everyMinute();
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
