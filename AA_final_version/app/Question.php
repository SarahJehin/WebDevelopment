<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table = 'questions';
    
    
    protected $fillable = [
        'question', 'image', 'period_id', 'is_active',
    ];
    
    
    public function period()
    {
        return $this->belongsTo('App\Period', 'period_id');
    }
    
    
    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
    
    
}
