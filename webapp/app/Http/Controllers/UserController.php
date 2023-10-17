<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_table;

class UserController extends Controller
{
    function loginIndex() {
        return view('login');
    }

    function postlogin(){
        return view('login');
    }

    function DataInsert(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
    
        $isInsertSuccess = User_table::insert([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    
        if ($isInsertSuccess) {
            return redirect('login'); // Redirect ke rute login
        } else {
            return redirect()->back(); // Redirect kembali jika pendaftaran gagal
        }
    }
    
}
