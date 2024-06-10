<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //logout
    public function logout(){
        auth() ->logout();
        return redirect('/');
    }

    //login
    public function login(Request $request){
        $login = $request->validate([
            'lname' => ['required'],
            'lpassword'=> ['required']
        ]);

        if(auth()->attempt(['name'=>$login['lname'], 'password'=> $login['lpassword']])){
            $request->session()->regenerate();
            return redirect('/show');
        }

        return redirect('/');
    }

    //registration
    public function register(Request $request){
        $user = $request->validate([
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password'=> ['required']
        ]);

        //hashing password
        $user['password'] = bcrypt($user['password']);
        //create user details upon registration
        $userDetails = User::create($user);

        auth() -> login($userDetails);
        return redirect('/');
    }
}
