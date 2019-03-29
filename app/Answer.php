<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $table ="answers";
    public function qustion(){
        return $this->belongsTo('App\Qustion');

    }

    public function answerComments(){
        return $this->hasMany('App\AnswerComment');

    }
    public function users(){
        return $this->hasMany('App\User');

    }


}
