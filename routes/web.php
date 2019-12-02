<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get(
    '/',
    [
        'as' => 'home',
        'uses' => 'MainController@home' 
    ]
);

$router->get(
    '/signin',
    [
        'as' => 'signin',
        'uses' => 'UserController@signin' 
    ]
);

$router->post(
    '/signin',
    [
        'as'   => 'signin_user',
        'uses' => 'UserController@signinUser'
    ]
);

$router->get(
    '/signup',
    [
        'as' => 'signup',
        'uses' => 'UserController@signup' 
    ]
);

$router->post(
    '/signup',
    [
        'as' => 'CreateUser',
        'uses' => 'UserController@createUser' 
    ]
);

$router->get(
    '/signout',
    [
        'as' => 'signout',
        'uses' => 'UserController@signout'
    ]
);

$router->get('/quiz/{idQuiz}',
    [
        'as' => 'quiz',
        'uses' => 'QuizController@quiz' 
    ]
);

$router->get('/tags',
    [
        'as' => 'tags',
        'uses' => 'TagController@tag' 
    ]
);

$router->get('/tags/{idTag}/quiz',
    [
        'as' => 'tagQuizzes',
        'uses' => 'TagController@quiz' 
    ]
);

$router->get('/account',
    [
        'as' => 'profile',
        'uses' => 'UserController@profile'
    ]
);

$router->post('/quiz/{idQuiz}/result',
    [
        'as' => 'result',
        'uses' => 'QuizController@result'
    ]
);

