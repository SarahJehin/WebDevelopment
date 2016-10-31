<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $table = 'tickets';
    
    
    protected $fillable = [
        'name', 'path', 'is_downloaded', 'is_active',
    ];
    
    
    public function winners_period()
    {
        return $this->hasMany('App\Winners_Periods');
    }
}
