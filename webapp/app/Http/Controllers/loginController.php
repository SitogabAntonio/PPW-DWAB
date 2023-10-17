<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    function loginIndex() {
        return view('login');
    }

    function DataInsert(Request $request) {
        $username = $request->input(username);
        $email = $request->input(email);
        $password = $request->input(password);

        $isInsertSuccess = User::insert(['username'=>$username,
                                        'email'=>$email,
                                        'password'=>$password
    ]);
    }

    public function postlogin (Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login');
    }
}
