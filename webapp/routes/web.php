<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('landing');
});

Route::get('/login', [UserController::class, 'loginIndex']);
Route::post('dataInsert', [UserController::class, 'DataInsert']);
Route::post('/postlogin','LoginController@postlogin') -> name('postlogin');

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/subcategory', function () {
    return view('subcategory');
});

Route::get('/addsubcategory', function () {
    return view('addsubcategory');
});


