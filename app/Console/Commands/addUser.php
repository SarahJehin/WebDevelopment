<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App;

class addUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new user to the users table';

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
        //
        /*
        DB::table('users')->insert(
            ['name' => 'John', 'email' => 'johndoe@test.com', 'password' => '12345']
        );*/
        
        //random users aanmaken
        factory(App\User::class)->create();
        
    }
}
