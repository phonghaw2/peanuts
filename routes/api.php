<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/show', [PostController::class, 'show'])->name('show');
Route::post('/posts/slug', [PostController::class, 'generateSlug'])->name('posts.slug.generate');
Route::get('/posts/slug', [PostController::class, 'checkSlug'])->name('posts.slug.check');
