<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VoteController;

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

Route::get('/rank', [ProjectController::class, 'search_rank'])->name('rank.search');

Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::post('/event', [EventController::class, 'search_event'])->name('event.search');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');

Route::get('/detailEvent', function () {
    return view('detailEvent');
});

// Halaman Project
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/detailProject', function () {
    return view('detailProject');
});

Route::get('/upload', [ProjectController::class, 'create']);
Route::post('/upload', [ProjectController::class, 'store'])->name('upload.store');

Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/adminDashboard', [AdminController::class, 'index'])->middleware('password.protected');
Route::get('/adminEvents', [AdminController::class, 'events']);
Route::post('/adminEvents', [AdminController::class, 'store'])->name('event.store');
Route::get('/adminUsers', [AdminController::class, 'users']);
Route::get('/adminApproval', [AdminController::class, 'unapproved_projects']);
Route::get('/adminProjects', [AdminController::class, 'projects']);
Route::put('/adminProjects/{id}/toggle', [AdminController::class, 'approval_toggle'])->name('approve');


// Route::get('/adminEvents', function () {
//     return view('adminEvents');
// });

// Route::get('/adminApproval', function () {
//     return view('adminApproval');
// });

// Route::get('/adminDashboard', function () {
//     return view('adminDashboard');
// });

// Route::get('/adminProjects', function () {
//     return view('adminProjects');
// });

// Route::get('/adminUsers', function () {
//     return view('adminUsers');
// });

Route::get('/adminAddEvent', function () {
    return view('adminAddEvent');
});

Route::post('projects/{project}/vote', [VoteController::class, 'vote'])->name('vote');
Route::post('projects/{project}/unvote', [VoteController::class, 'unvote'])->name('unvote');

// temp
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::middleware(['auth:admin'])->group(function () {
//         // Rute-rute untuk admin
//         Route::get('/adminDashboard', 'AdminController@index')->name('dashboard');
//     });

//     Route::middleware(['guest:admin'])->group(function () {
//         // Rute-rute untuk login dan register admin
//         Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
//         Route::post('/login', 'AdminAuth\LoginController@login');
//         Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

//         Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
//         Route::post('/register', 'AdminAuth\RegisterController@register');
//     });
// });
// temp

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
})->name('login.admin');

Route::post('/loginAdmin', [AdminController::class, 'handleForm'])->name('check');

// Route::post('/adminDashboard', [AdminController::class, 'handleForm']);
// Route::get('/adminDashboard', function () {
//     return 'Ini adalah route yang dilindungi dengan password';
// })->middleware('password.protected');