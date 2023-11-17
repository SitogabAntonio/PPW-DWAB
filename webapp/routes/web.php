<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for the registration page
Route::get('/register', function () {
    return view('auth.register'); // Specify the directory structure with dot notation
})->name('register');


// Route for the login page
Route::get('/login', function () {
    return view('auth.login'); // Assuming your login blade file is named login.blade.php
})->name('login');