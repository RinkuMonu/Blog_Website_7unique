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
Route::get('/world', function () {
    return view('news.world');
})->name('world');

Route::get('/data', function () {
    return view('news.data');
})->name('data');

Route::get('/health', function () {
    return view('news.health');
})->name('health');

Route::get('/science', function () {
    return view('news.science');
})->name('science');