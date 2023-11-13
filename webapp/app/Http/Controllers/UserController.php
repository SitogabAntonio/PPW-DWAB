<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_table;

class UserController extends Controller
{
    function loginIndex() {
        return view('login');
    }

    function DataInsert(Request $request) {
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $isInsertSuccress = User_table::insert(['username'=>$username,
                                                'email'=>$email,
                                                'password'=>$password
    ]);
        if($isInsertSuccress) echo '';
        else echo '';
    }
}
