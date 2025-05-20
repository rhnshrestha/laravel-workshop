<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('aboutus');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});

