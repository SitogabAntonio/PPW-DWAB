<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\ProfileController;

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

//Route HomePage
Route::get('/', [HomeController::class,'index']);
Route::get('/post/{post_id}', [SubcategoryController::class,'show']);

//Route Middleware
Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route Category
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']); // Perbaikan di sini
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);
    Route::get('/categories/delete/{category_id}', [CategoryController::class,'destroy']);
    // Route Post
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/post/create', [PostController::class, 'create']);
    Route::post('/post', [PostController::class, 'store']);
    Route::get('/post/edit/{post}', [PostController::class, 'edit']);
    Route::put('/post/{post}', [PostController::class, 'update']);
    Route::get('/post/delete/{post_id}', [PostController::class,'destroy']);


});

Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/find-your-communities', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/post/{post_slug}', [SubcategoryController::class, 'show'])->name('subcategory.show');


// Route for the registration page
Route::get('/register', function () {
    return view('auth.register'); // Specify the directory structure with dot notation
})->name('register');


// Route for the login page
Route::get('/login', function () {
    return view('auth.login'); // Assuming your login blade file is named login.blade.php
})->name('login');



