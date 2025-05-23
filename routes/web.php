<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user/register', [UserController::class, 'register']);
Route::get('/user/dashboard', [UserController::class, 'dashboard']);

Route::resource('category',CategoryController::class);

// Route::get('/user/add', [CategoryController::class, 'add']);
// Route::get('/user/list', [CategoryController::class, 'list']);
// Route::get('/user/update', [CategoryController::class, 'update']);
// Route::get('/user/delete', [CategoryController::class, 'delete']);



Route::get('/about-us', function () {
    return view('aboutus');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});

