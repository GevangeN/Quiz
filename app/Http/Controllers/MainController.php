<?php

namespace App\Http\Controllers;

use App\Quizzes;

class MainController extends Controller {
    
    public function home() {

        $quizzes = Quizzes::all();

        $content = view(
            'home',
            [
                'quizzes' => $quizzes
            ]
        );

        return $content;

    }
}
