<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'WelcomeController@welcome');
Route::get('test2', 'WelcomeController@test');

Auth::routes();




Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index');
    
    //user
    Route::get('user/account_info', 'UserController@get_account_info');
    Route::post('user/update_account', 'UserController@update_account');
    Route::get('user/rules', 'UserController@get_rules');
    
    
    //question
    Route::get('user/play_game', 'QuestionController@get_question');
    Route::post('user/next_question', 'QuestionController@next_question');
    
    
    //admin
    Route::get('admin/set_periods', 'PeriodController@get_periods');
    Route::post('admin/update_period', 'PeriodController@update_period');
    Route::get('admin/add_question', 'QuestionController@add_question');
    Route::post('admin/create_question', 'QuestionController@create_question');
    Route::get('admin/edit_question/{id}', 'QuestionController@edit_question');
    Route::post('admin/update_question', 'QuestionController@update_question');
    Route::get('admin/participants', 'AdminController@get_participants');
    Route::get('admin/participant_details/{id}', 'AdminController@participant_details');
    Route::get('admin/disqualify/{id}', 'AdminController@disqualify_participant');
    Route::get('admin/requalify/{id}', 'AdminController@requalify_participant');
    Route::get('admin/delete_participant/{id}', 'AdminController@delete_participant');
    Route::get('admin/questions', 'QuestionController@get_question_overview');
    
    
    //testRoute
    Route::get('test', function()
               {
                    return view('test');
                });
    
    
});

