<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table = 'answers';
    
    
    protected $fillable = [
        'answertext', 'question_id', 'is_correct', 'is_active',
    ];
    
    
    public function question()
    {
        return $this->belongsTo('App\Question', 'question_id');
    }
}
