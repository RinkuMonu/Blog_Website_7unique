<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
class Post extends Model
{
    protected $fillable = [
        'user_id','category_id','subcategory_id', 'title', 'slug', 'content', 'thumbnail', 
        'images','video_url', 'status', 'is_trending', 'is_latest','is_premium','is_popular','is_live', 'tags'
    ];

    protected $casts = [
        'images' => 'array', 
    ];
    // Category ke sath relationship
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }
    public function hasSubcategory() {
        return !is_null($this->subcategory_id);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    // Slug automatically banane ke liye (SEO)
    protected static function boot() {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
}