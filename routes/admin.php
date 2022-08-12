<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;




Route::get('/', [AdminController::class, 'index'])->name('index')->middleware('alreadyLoggedIn');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('isAdmin');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
Route::post('/register', [AdminController::class, 'register'])->name('register');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/test', [AdminController::class, 'test'])->name('test');

Route::group([
    'as' => 'users.',
    'prefix' => 'users',
    'middleware' => 'isAdmin',
], static function(){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{user}', [UserController::class, 'show'])->name('show');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
});


Route::group([
    'as' => 'posts.',
    'prefix' => 'posts',
    'middleware' => 'isAdmin',
], static function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::post('/import', [PostController::class, 'importCsv'])->name('import_csv');
});

