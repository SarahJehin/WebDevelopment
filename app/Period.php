<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    //
    protected $table = 'periods';
    
    
    protected $fillable = [
        'period_name', 'startdate', 'enddate', 'is_active',
    ];
    
    
    public function winners_period()
    {
        return $this->hasMany('App\Winners_period');
    }
    
    public function question()
    {
        return $this->hasMany('App\Question');
    }
    
}
