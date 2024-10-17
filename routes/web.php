<?php

use Illuminate\Support\Facades\Route;

Route::view('/contact', 'contact');
Route::view('/login', 'login');
Route::view('/register', 'register');

Route::get('/', function () {
    return view('welcome');
});
