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
Route::get('/client/store', function () {
    return view('client/store');
});
Route::get('/client/blog', function () {
    return view('client/blog');
});
Route::get('/client/contact', function () {
    return view('client/contact');
});
Route::get('/client/single', function () {
    return view('client/single');
});
Route::get('/client/travel', function () {
    return view('client/travel');
});