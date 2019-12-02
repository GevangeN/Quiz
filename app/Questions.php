<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model {

    protected $table = 'questions';

    public function levels() {

        return $this->belongsTo('App\Levels', 'levels_id');

    }

    public function answers() {

        return $this->hasMany('App\Answers', 'questions_id');
    }

}