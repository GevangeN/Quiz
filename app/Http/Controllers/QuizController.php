<?php

namespace App\Http\Controllers;
use App\Quizzes;
use Illuminate\Http\Request;

class QuizController extends Controller {
    
    public function quiz($idQuiz) {

        $quizzes = Quizzes::find($idQuiz);

        $content = view(
            'quiz',
            [
                'quizzes' => $quizzes
            ]
        );

        return $content;

    }

    public function result(Request $request, $quizId) {

        $quiz = Quizzes::find($quizId);
        $score = 0;
        $nbQuestion = count($quiz->questions);
        $responses = $request->all();        
        
        foreach($responses as $responseKey => $responseValue) {
            
            if($responseKey == $responseValue) {
                $score++;
            }
        }        

        $content = view(
            'result',
            [
                'quizzes' => $quiz,
                'score' => $score,
                'nbQuestion' => $nbQuestion
            ]);

        return $content;
    }
}