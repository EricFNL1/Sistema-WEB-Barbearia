<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaberONController;
use App\Http\Controllers\CommentController;


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


Route::get('/baberon', [BaberONController::class, 'index'])->name('baberon.index')->middleware('auth');
