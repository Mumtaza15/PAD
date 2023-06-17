<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\LoginController;

use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/', function () {
//     return view('homeRev');
// });

// Route::get('/login', function () {
//     return view('loginRev');
// });

// Route::get('/register', function () {
//     return view('registerRev');
// });

Route::get('/', [ProjectController::class, 'home'])->name('home');

// Route::get('/homeRev', [ProjectController::class, 'home'])->name('home');

Route::get('/rank', function () {
    return view('rank');
});

Route::get('/event', [EventController::class, 'index']);

Route::get('/detailEvent', function () {
    return view('detailEvent');
});

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/detailProject', function () {
    return view('detailProject');
});

Route::get('/upload', [ProjectController::class, 'create']);
Route::post('/upload', [ProjectController::class, 'store'])->name('upload.store');

Route::get('/tes', function () {
    return view('detailProject');
});


Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
