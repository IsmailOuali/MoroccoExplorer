<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Auth/login', function () {
    return view('Auth/login');
});
Route::get('/Auth/register', function () {
    return view('Auth/register');
});
Route::get('/client/home', function () {
    return view('client/home');
});