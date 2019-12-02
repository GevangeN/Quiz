<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller {
    
    public function tag() {

        $tag = Tag::all();

        $content = view(
            'tags',
            [
                'tag' => $tag
            ]
        );

        return $content;

    }

    public function quiz($idTag) {

        $tag = Tag::find($idTag);

        $content = view(
            'tagQuizzes',
            [
                'tag'=>$tag,
            ]
        );
        return $content;
    }
}