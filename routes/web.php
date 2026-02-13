<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'index']);
Route::get('/englishnews', [PostController::class, 'englishnews']);

