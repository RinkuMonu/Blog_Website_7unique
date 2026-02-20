<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with(['category', 'subcategory'])->latest()->get();
        return view('news.index', compact('posts'));
    }
    public function getPost() {
        $posts = Post::with(['category', 'subcategory'])->latest()->get();
        return view('admin.news.index', compact('posts'));
    }
    public function create() {
        $categories = Category::all();
        $subcategories = Subcategory::all(); 
        return view('admin.news.create', compact('categories', 'subcategories'));
    }
    public function store(Request $request) {
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category_id' => 'required|exists:categories,id',
                'subcategory_id' => 'nullable|exists:subcategories,id',
                'content' => 'required',
                'thumbnail' => 'nullable|file|max:10240',
                'images' => 'nullable|array',
                'images.*' => 'file|max:10240',
                'video_url' => 'nullable', 
                'tags' => 'nullable|string',
                'status' => 'nullable',
                'is_trending' => 'nullable',
                'is_latest' => 'nullable',
            ]);
            $validatedData['slug'] = \Illuminate\Support\Str::slug($request->title);
            $validatedData['is_trending'] = $request->has('is_trending') ? 1 : 0;
            $validatedData['is_latest'] = $request->has('is_latest') ? 1 : 0;
            $validatedData['status'] = $request->has('status') ? 'published' : 'draft';

            if ($request->hasFile('thumbnail')) {
                $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
            }

            if ($request->hasFile('images')) {
                $imagePaths = [];
                foreach ($request->file('images') as $file) {
                    $imagePaths[] = $file->store('post_images', 'public');
                }
                $validatedData['images'] = $imagePaths;
            }

            Post::create($validatedData);

            return redirect()->route('admin.posts.index')->with('success', 'News Uploaded!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function home() {
        $trending = Post::where('is_trending', 1)->where('status', 1)->latest()->take(5)->get();
        $latest = Post::where('status', 1)->latest()->paginate(10); // is_latest ki jagah status check behtar hai
        $categories = Category::with('subcategories')->get(); // Sidebar ke liye relations ke sath
        
        return view('welcome', compact('trending', 'latest', 'categories'));
    }
    public function categoryPosts($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->where('status', 1)->latest()->paginate(12);
        return view('frontend.category', compact('category', 'posts'));
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id', $post->category_id)->get(); 
        return view('admin.news.edit', compact('post', 'categories', 'subcategories'));
    }
    // 2. Update Logic
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video_url' => 'nullable|url',
            'tags' => 'nullable|string',
        ]);

        // Basic Fields
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->content = $request->content;
        $post->video_url = $request->video_url;
        $post->tags = $request->tags;
        
        // Toggles
        $post->is_trending = $request->has('is_trending');
        $post->is_latest = $request->has('is_latest');
        $post->status = $request->has('status') ? 'published' : 'draft';

        // Thumbnail Update
        if ($request->hasFile('thumbnail')) {
            if ($post->thumbnail) { Storage::disk('public')->delete($post->thumbnail); }
            $post->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        // Multiple Images Update (Adding new to existing)
        if ($request->hasFile('images')) {
            $newImages = [];
            foreach ($request->file('images') as $file) {
                $newImages[] = $file->store('post_images', 'public');
            }
            // Purani images ke sath nayi merge kar rahe hain
            $currentImages = $post->images ?? [];
            $post->images = array_merge($currentImages, $newImages);
        }

        $post->save();
        return redirect()->route('admin.posts.index')->with('success', 'Post Updated Successfully!');
    }
    // 3. Delete Post
    public function destroy($id) {
        $post = Post::findOrFail($id);
        
        // Files delete karna memory se
        if ($post->thumbnail) { Storage::disk('public')->delete($post->thumbnail); }
        if ($post->images) {
            foreach ($post->images as $img) {
                Storage::disk('public')->delete($img);
            }
        }

        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }
    // 4. Toggle Trending Status (AJAX ya Direct)
    public function toggleTrending($id) {
        $post = Post::findOrFail($id);
        $post->is_trending = !$post->is_trending;
        $post->save();

        return back()->with('success', 'Trending Status Updated!');
    }
}
