<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\QuestionController;
// --- 1. DEFAULT LOGIN ROUTE (Sabse upar taaki Middleware ise pehchan le) ---
// Route::get('login', [UserAuthController::class, 'loginGet'])->name('user.login');

// --- 2. Public / Home Routes ---
Route::get('/',[PostController::class,'home'])->name('home');
Route::post('/questions/store', [QuestionController::class, 'store'])->name('questions.store');
// Route::get('/{slug}/{subslug?}',[PostController::class,'slugWiseData']);
// Route::get('/{slug}/{postTitle}',[PostController::class,'postDetails'])->name('post.details');

// --- 3. News Static Pages ---
    // Route::view('/english-news', 'news.englishnews')->name('english.news');
    // Route::view('/india-news', 'news.india')->name('india.news');
    // Route::view('/movies-news', 'news.movies')->name('movies.news');
    // Route::view('/world', 'news.world')->name('world.news');
    // Route::view('/sports-news', 'news.sports')->name('sports.news');
    // Route::view('/premium-news', 'news.premium')->name('premium.news');
    // Route::view('/opinion-news', 'news.opinion')->name('opinion');
    // Route::view('/data', 'news.data')->name('data');
    // Route::view('/health', 'news.health')->name('health');
    // Route::view('/science', 'news.science')->name('science');
    // Route::view('/entertainment', 'news.entertainment')->name('entertainment');

// --- 4. Authentication Routes ---
Route::get('admin/login', [AuthController::class, 'loginGet'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::get('author/login', [AuthController::class, 'loginGet'])->name('author.login');
Route::post('author/login', [AuthController::class, 'login'])->name('author.login.post');
Route::get('user/login', [UserAuthController::class, 'login'])->name('user.login');
Route::post('user/login', [UserAuthController::class, 'loginStore'])->name('user.login.post');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/subcategories', [SubcategoryController::class, 'index'])->name('subcategories.index');

// Common Dashboard Redirect
Route::get('/dashboard', function() {
    return auth()->user()->role == 1 ? redirect()->route('admin.dashboard') : redirect()->route('author.dashboard');
})->name('dashboard')->middleware('auth');

// --- 5. API / Helper Routes ---
Route::get('/get-subcategories/{id}', function($id) {
    $subcategories = \App\Models\Subcategory::where('category_id', $id)->get();
    return response()->json($subcategories);
});

// --- 6. Role Based Protected Routes ---
Route::middleware(['auth'])->group(function () {
    $roles = ['admin', 'author'];
    
    foreach ($roles as $role) {
        // Yahan middleware ka naam wahi hona chahiye jo aapne Kernel.php mein register kiya hai
        Route::middleware($role)->prefix($role)->name($role . '.')->group(function () {
            
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
            Route::resource('member', MemberController::class);

            // Category Management
            Route::prefix('categories')->name('categories.')->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::post('/store', [CategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
            });

            // Subcategory Management
            Route::prefix('subcategories')->name('subcategories.')->group(function () {
                Route::get('/', [SubcategoryController::class, 'index'])->name('index');
                Route::post('/store', [SubcategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [SubcategoryController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [SubcategoryController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [SubcategoryController::class, 'destroy'])->name('destroy');
            });

            // Post Management
            Route::prefix('posts')->name('posts.')->group(function () {
                Route::get('/', [PostController::class, 'getPost'])->name('index');
                Route::get('/{id}/show', [PostController::class, 'showPost'])->name('show');
                Route::get('/create', [PostController::class, 'create'])->name('create');
                Route::post('/store', [PostController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [PostController::class, 'update'])->name('update');
                Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
                Route::post('/toggle-trending/{id}', [PostController::class, 'toggleTrending'])->name('trending');
            });
            Route::get('/questions', [QuestionController::class, 'adminIndex'])->name('questions.index');
            Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
        });
    }
});

Route::resource('posts', PostController::class)->only(['index', 'show']);
Route::get('/{slug}/{param2?}/{param3?}', [PostController::class, 'handleRequest'])->name('dynamic.route');
