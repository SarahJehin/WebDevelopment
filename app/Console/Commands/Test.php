<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command can be used for all kind of tests';

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
        $winners = User::where('quiz_score', '>', 0)->where('is_disqualified', 0)->orderBy('quiz_score', 'desc')->limit(3)->get();
        //return $winners;
        
        $this->info($winners);
    }
}
