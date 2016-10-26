<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Winners_period;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'photo', 'email', 'ip', 'street', 'number', 'zipcode', 'city', 'country', 'time_earned', 'quiz_score', 'game_status', 'is_active', 'is_disqualified', 'is_admin', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function winners_period()
    {
        return $this->hasMany('App\Winners_period', 'winner_id');
    }
    
}
