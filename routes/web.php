<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', action:[HomeController::class, 'index'])->name('home');
Route::get('/office', action:[HomeController::class, 'office'])->name('office');
Route::get('/apartment', action:[HomeController::class, 'apartment'])->name('apartment');




Route::get('/test', action:[HomeController::class, 'test'])->name('test');


// Route::post('/test', function () {
//     return view('test');
// })->name('test');



Route::group([
    'as' => 'posting.',
    'prefix' => 'posting',
    'middleware' => 'hasLogged',
], static function(){
    Route::get('/', [PostingController::class, 'index'])->name('index');
    Route::get('/create', [PostingController::class, 'create'])->name('create');
    Route::post('/store', [PostingController::class, 'store'])->name('store');
    // Route::get('/', [PostingController::class, 'edit'])->name('edit');
    // Route::delete('/', [PostingController::class, 'destroy'])->name('destroy');
});


// // google login
// route::get('login/google', [LoginController::class,'redirectToGoogle'])->name('login.google');
// route::get('login/google/callback', [LoginController::class,'handleGoogleCallback']);

// //facebook login
// route::get('login/facebook', [LoginController::class,'redirectToFacebook'])->name('login.facebook');
// route::get('login/facebook/callback', [LoginController::class,'handleFacebookCallback']);




Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/update', [AuthController::class, 'updateRole'])->name('updateRole');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



