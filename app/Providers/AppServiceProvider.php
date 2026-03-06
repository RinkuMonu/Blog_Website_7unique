<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Post;
class AppServiceProvider extends ServiceProvider
{   
    public function register(): void
    {
        
    }
    
    public function boot(): void
    {
        Gate::define('author',function(User $user){
            return $user->role() == 3; 
        });
        View::composer('partials.header', function ($view) {
            $menuItems = Category::with('subcategories')
                ->get();                    
            $view->with('headerMenu', $menuItems);
        });
        View::composer('partials.footer', function ($view) {
            $categories = Category::with('subcategories')->take(4)->get();
            $trendingPosts = Post::where('is_trending',1)
                            ->latest()
                            ->take(8)
                            ->get();
            $latestPosts = Post::latest()
                            ->take(10)
                            ->get();
            $view->with([
                'footerCategories' => $categories,
                'trendingPosts' => $trendingPosts,
                'latestPosts' => $latestPosts
            ]);

        });
    }
}
