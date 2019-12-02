<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model {

    protected $table = 'quizzes';

    public function user() {

        return $this->belongsTo('App\User', 'app_users_id');        
    }

    public function questions() {

        return $this->hasMany('App\Questions', 'quizzes_id');
    }

    public function tags() {
        
        return $this->belongsToMany('App\Tag', 'quizzes_has_tags', 'quizzes_id', 'tags_id');
    }
}


