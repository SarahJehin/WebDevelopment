<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'photo' => 'required',
            'street' => 'required|max:255',
            'number' => 'required|max:255',
            'zipcode' => 'required|max:255',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
        $photo = "no_image";
        $ip = request()->ip();
        $time_earned = 0;
        $quiz_score = 0;
        $game_status = 0;

        //user is active by default
        $is_active = 1;
        $is_disqualified = 0;
        $is_admin = 0;
        
        if(isset($data['photo']))
        {
            $destination_path =  base_path() . "/public/images/profile_pics";
            $image_path = time() . '_' . $data['photo']->getClientOriginalName();
            $data['photo']->move($destination_path, $image_path);
            $photo = $image_path;
        }
        
        
        return User::create([
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'photo' => $image_path,
            'ip' => $ip,
            'street' => $data['street'],
            'number' => $data['number'],
            'zipcode' => $data['zipcode'],
            'city' => $data['city'],
            'country' => $data['country'],
            'time_earned' => $time_earned,
            'quiz_score' => $quiz_score,
            'game_status' => $game_status,
            'is_active' => $is_active,
            'is_disqualified' => $is_disqualified,
            'is_admin' => $is_admin,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
