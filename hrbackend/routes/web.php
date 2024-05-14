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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::any('/home', function () {
    $usertype = request('usertype');
    return view('home', ['usertype' => $usertype]);
})->name('home');

Route::get('/view-profile', function () {
    return view('vp');
});

Route::get('/edit-profile', function () {
    return view('ep');
});

Route::get('/post-jobs', function(){
    $usertype = request('usertype');
    //echo($usertype);
    $name = request('name');
    return view('post_jobs', ['usertype' => $usertype, 'name' => $name]);
})->name('post-jobs');

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'landing')->name('landing');
    Route::get('/login', 'login')->name('login');
    Route::get('/signup', 'signup')->name('signup');
    Route::post('/register', 'register')->name('register');
    Route::post('/authenticate', 'authenticate')->name('auth');
    Route::any('/home', 'home')->name('home');
    Route::get('/vd', 'view_job_details')->name('view-details');
});