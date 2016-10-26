<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('photo')->nullable();
            $table->string('ip');
            $table->string('street');
            $table->integer('number');
            $table->integer('zipcode');
            $table->string('city');
            $table->string('country');
            $table->integer('time_earned')->nullable();
            $table->integer('quiz_score')->nullable();
            $table->integer('game_status');
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_disqualified');
            $table->tinyInteger('is_admin');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
