<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::resource('posts', PostController::class);
Route::get('/', [PostController::class, 'index']);
Route::get('admin/login', [AuthController::class, 'loginGet'])->name('admin.login');
Route::get('user/login', [UserAuthController::class, 'loginGet'])->name('user.login');

Route::post('admin/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin', [AuthController::class, 'loginGet']);

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/subcategories', [SubcategoryController::class, 'index'])->name('subcategories.index');
Route::get('/get-subcategories/{id}', function($id) {
    $subcategories = \App\Models\Subcategory::where('category_id', $id)->get();
    return response()->json($subcategories);
});
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
  Route::resource('member', MemberController::class, );  
  // Category Management (Sirf Add/Edit/Delete)
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    
    Route::post('/subcategories/store', [SubcategoryController::class, 'store'])->name('admin.subcategories.store');
    Route::get('/subcategories/edit/{id}', [SubcategoryController::class, 'edit'])->name('admin.subcategories.edit');
    Route::post('/subcategories/update/{id}', [SubcategoryController::class, 'update'])->name('admin.subcategories.update');
    Route::delete('/subcategories/delete/{id}', [SubcategoryController::class, 'destroy'])->name('admin.subcategories.destroy');
    // Post Management
    Route::get('/posts', [PostController::class, 'getPost'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::post('/posts/update/{id}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    // Status Toggles
    Route::post('/posts/toggle-trending/{id}', [PostController::class, 'toggleTrending'])->name('admin.posts.trending');
});
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


Route::get('/sports-news', function () {
    return view('news.sports');
})->name('sports.news');


Route::get('/premium-news', function () {
    return view('news.premium');
})->name('premium.news');

Route::get('/opinion-news', function () {
    return view('news.opinion');
})->name('opinion.news');

Route::get('/data', function () {
    return view('news.data');
})->name('data');

Route::get('/health', function () {
    return view('news.health');
})->name('health');

Route::get('/science', function () {
    return view('news.science');
})->name('science');


Route::get('/entertainment', function () {
    return view('news.entertainment');
})->name('entertainment');
