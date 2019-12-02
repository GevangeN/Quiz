<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    public function  quizzes() {
        return $this->belongsToMany('App\Quizzes', 'quizzes_has_tags', 'tags_id', 'quizzes_id');
    }

}