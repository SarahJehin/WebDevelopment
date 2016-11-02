<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Winners_Period extends Model
{
    //
    protected $table = 'winners_period';
    
    
    protected $fillable = [
        'period_id', 'winner_id', 'ticket_id', 'is_active',
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\User', 'winner_id');
    }
    
    public function period()
    {
        return $this->belongsTo('App\Period', 'period_id');
    }
    
    
    public function ticket()
    {
        return $this->belongsTo('App\Tickets', 'ticket_id');
    }
    
}
