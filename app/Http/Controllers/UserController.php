<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Support\Facades\Log;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Utils\UserSession;

class UserController extends Controller {

    public function signup() {

        $content = view('user.signup');

        return $content;
    }

    public function signin() {

        $content = view('user.signin');
        return $content;
    }

    public function signinUser (Request $request) {
        try {
            $email = $request->input('email');
            $password = $request->input('password');
            $user = User::where('email', $email)->first()
            ;
             if (! $user) {
                throw new Exception('Email address not found');
            }
             if (! Hash::check($password, $user->password)) {
                throw new Exception('Invalid password');
            }
            UserSession::connect($user);
            
            $response = redirect()->route('home');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            $response = redirect()->route('signin');
        }
         return $response;
    }

    public function profile() {
        
        $content = view('user.profile');
        return $content;

    }

    public function signout() {

        if (\App\Utils\UserSession::isConnected()) {
            UserSession::disconnect();
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }

    public function createUser (Request $request) {

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $password = $request->input('password');
        $email = $request->input('email');

        if (
            ! empty($firstname)
            && ! empty($lastname)
            && ! empty($password)
            && ! empty($email)
        ) {
            $user = new User();

            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->password = Hash::make($password);
            $user->email = $email;

            $user->save();

            return redirect()->route('signin');

        } else {
            
            dump('erreur');
        }
    } 
}