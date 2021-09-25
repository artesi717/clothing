<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/postpageclothing', function () {
    return view('postpageclothing');
});

Route::get('/postpageshoes', function () {
    return view('postpageshoes');
});

Route::get('/cart', function () {

    return view('cart');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Post routes
Route::get('/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('/postpageclothing/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::get('/cart/{post}', [App\Http\Controllers\PostsController::class, 'cart']);


// Profile routes
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index']);
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit']);
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update']);

