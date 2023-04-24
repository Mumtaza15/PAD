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
    return view('home');
});

Route::get('/login', function () {
    return view('loginRev');
});

Route::get('/register', function () {
    return view('registerRev');
});

Route::get('/home', function () {
    return view('homeRev');
});

Route::get('/rank', function () {
    return view('rank');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/tes', function () {
    return view('rank');
});