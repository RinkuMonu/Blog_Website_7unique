<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'index']);
Route::get('/english-news', function () {
    return view('news.englishnews');
})->name('english.news');


Route::get('/', function () {
    return view('home');
});



Route::get('/india-news', function () {
    return view('news.india');
})->name('india.news');



Route::get('/movies-news', function () {
    return view('news.movies');
})->name('movies.news');
