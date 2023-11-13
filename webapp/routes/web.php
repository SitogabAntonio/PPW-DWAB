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

Route::get('/kresensia', function () {
    return view('kresensia');
});

Route::get('/glorya', function () {
    return view('glorya');
});

Route::get('/deby', function () {
    return view('deby');
});

