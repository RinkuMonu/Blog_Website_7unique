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
    // public function slugWiseData($slug, $subslug = null)
    // {
    //     $category = Category::where('slug', $slug)->first() ?? abort(404);
    //     $query = Post::where('category_id', $category->id)->where('status', 'published');
    //     if ($subslug) {
    //         $subcategory = Subcategory::where('slug', $subslug)
    //             ->where('category_id', $category->id)
    //             ->first() ?? abort(404);            
    //     } else {
    //         $subcategory = null;
    //     }
    //     $posts = $query->latest()->paginate(15);
    //     $latest_news = Post::with('category')->with('subcategory')
    //         ->where('category_id', $category->id)
    //         ->where('is_latest', 1)
    //         ->where('status', 'published')
    //         ->latest()
    //         ->take(5)
    //         ->get();
    //     $popular = Post::where('category_id', $category->id) 
    //         ->where('is_popular', 1)
    //         ->where('status', 'published')
    //         ->latest()
    //         ->take(5)
    //         ->get();   
    //     $live_post = Post::where('category_id', $category->id)
    //         ->where('status', 'published')
    //         ->where('is_live', 1)->skip(1)->take(1)
    //         ->latest()
    //         ->first();     
    //     $active_slug = $subslug ?? $slug;
    //     $all_subcategories = Subcategory::where('category_id', $category->id)->get();
    //     return view('news.listing', compact(
    //         'category', 'subcategory', 'posts', 'active_slug', 'all_subcategories', 'latest_news', 'popular','live_post'
    //     ));
    // }
    // public function postDetails($slug, $postTitle)
    // {
    //     dd("fadf");
    //     $category = Category::where('slug', $slug)->first() ?? abort(404);
    //     if ($subslug) {
    //         $subcategory = Subcategory::where('slug', $subslug)
    //             ->where('category_id', $category->id)
    //             ->first() ?? abort(404);            
    //     } else {
    //         $subcategory = null;
    //     }
    //     $post = Post::where('slug', Str::slug($postTitle))
    //         ->where('category_id', $category->id)
    //         ->when($subcategory, function ($query) use ($subcategory) {
    //             return $query->where('subcategory_id', $subcategory->id);
    //         })
    //         ->where('status', 'published')
    //         ->firstOrFail();
    //     return view('news.details', compact('post'));
    // }

    public function handleRequest(Request $request, $slug, $param2 = null, $param3 = null)
    {
        // 1. Category check karein
        $category = Category::where('slug', $slug)->first() ?? abort(404);

        $subcategory = null;
        $postTitleSlug = null;

        // 2. Logic: URL structure identify karein
        if ($param3) {
            // Case: /{category}/{subcategory}/{post-slug}
            $subcategory = Subcategory::where('slug', $param2)
                ->where('category_id', $category->id)
                ->first() ?? abort(404);
            $postTitleSlug = $param3;
        } elseif ($param2) {
            // Case: /{category}/{something} 
            // Check karein ki 'something' subcategory hai ya post slug
            $checkSub = Subcategory::where('slug', $param2)
                ->where('category_id', $category->id)
                ->first();
            
            if ($checkSub) {
                $subcategory = $checkSub;
            } else {
                $postTitleSlug = $param2;
            }
        }

        // --- DECISION POINT ---

        // A. POST DETAILS VIEW (Agar postTitleSlug mil gaya hai)
        if ($postTitleSlug) {
            $post = Post::with(['user', 'category', 'subcategory']) // category/subcategory eager load karein
                ->where('slug', $postTitleSlug)
                ->where('category_id', $category->id)
                ->when($subcategory, function ($query) use ($subcategory) {
                    return $query->where('subcategory_id', $subcategory->id);
                })
                ->where('status', 'published')
                ->firstOrFail();

            // Breadcrumbs aur Sidebar ke liye data
            $all_subcategories = Subcategory::where('category_id', $category->id)->get();
            $popular = Post::with(['user', 'category', 'subcategory'])
                ->where('is_popular', 1)
                ->latest()
                ->take(5)
                ->get();

            return view('news.details', compact('post', 'category', 'subcategory', 'all_subcategories', 'popular'));
        }

        // B. LISTING VIEW (Agar postTitleSlug nahi hai, toh category ya subcategory list dikhao)
        $query = Post::where('category_id', $category->id)
            ->where('status', 'published');

        if ($subcategory) {
            $query->where('subcategory_id', $subcategory->id);
        }

        $posts = $query->latest()->paginate(15);

        // Latest News Logic
        $latest_news = Post::with(['category', 'subcategory'])
            ->where('category_id', $category->id)
            ->where('is_latest', 1)
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get();

        // Popular News Logic
        $popular = Post::where('category_id', $category->id) 
            ->where('is_popular', 1)
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get();   

        // Live Post Logic
        $live_post = Post::where('category_id', $category->id)
            ->where('status', 'published')
            ->where('is_live', 1)
            ->latest()
            ->skip(1)
            ->take(1)
            ->first();     

        $active_slug = $subcategory ? $subcategory->slug : $category->slug;
        $all_subcategories = Subcategory::where('category_id', $category->id)->get();

        return view('news.listing', compact(
            'category', 
            'subcategory', 
            'posts', 
            'active_slug', 
            'all_subcategories', 
            'latest_news', 
            'popular',
            'live_post'
        ));
    }
    public function index() {
        $posts = Post::with(['category', 'subcategory'])->latest()->get();
        return view('news.index', compact('posts'));
    }
    public function getPost() {
        $query = Post::with(['category', 'subcategory']);
       
        $posts = $query->latest()->get();
        $viewPath = 'admin.news.index' ;
        return view($viewPath, compact('posts'));
    }
    public function showPost($id) {
        $post = Post::with(['category', 'subcategory'])->findOrFail($id);
        return response()->json($post);
    }
    public function create() {
        $categories = Category::all();
        $subcategories = Subcategory::all(); 
        $viewPath = 'admin.news.create';
        return view($viewPath, compact('categories', 'subcategories'));
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
                'is_popular' => 'nullable',
                'is_premium' => 'nullable',
                'is_live' => 'nullable', // Ye add kiya
            ]);

            $validatedData['slug'] = \Illuminate\Support\Str::slug($request->title);
            $validatedData['user_id'] = auth()->id();

            // Checkboxes ka logic: Agar check hai toh 1, warna 0
            $validatedData['is_trending'] = $request->has('is_trending') ? 1 : 0;
            $validatedData['is_latest'] = $request->has('is_latest') ? 1 : 0;
            $validatedData['is_popular'] = $request->has('is_popular') ? 1 : 0;
            $validatedData['is_premium'] = $request->has('is_premium') ? 1 : 0;
            $validatedData['is_live'] = $request->has('is_live') ? 1 : 0; // Ye add kiya
            
            // Status logic
            $validatedData['status'] = $request->has('status') ? 'published' : 'draft';

            // Thumbnail upload logic
            if ($request->hasFile('thumbnail')) {
                $validatedData['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
            }

            // Multiple images upload logic
            if ($request->hasFile('images')) {
                $imagePaths = [];
                foreach ($request->file('images') as $file) {
                    $imagePaths[] = $file->store('post_images', 'public');
                }
                $validatedData['images'] = $imagePaths;
            }

            Post::create($validatedData);

            $routePrefix = (auth()->user()->role == 1) ? 'admin' : 'author';
            return redirect()->route($routePrefix . '.posts.index')
                            ->with('success', 'News Uploaded Successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong: ' . $e->getMessage())->withInput();
        }
    }
    public function home() {
        $trending = Post::with('user')->where('is_trending', 1)->where('status', 'published')->latest()->get();
        $latest = Post::with('category')->with('subcategory')->with('user')->where('is_latest', 1)->where('status', 'published')->latest()->paginate(10);
        $popular = Post::with('user')->where('is_popular', 1)->where('status', 'published')->latest()->paginate(10);
        $premium = Post::with('category')->with('subcategory')->with('user')->where(function($query) {
            $query->where('category_id', 6)
                ->orWhere('is_premium', 1);
        })->where('status', 'published')->latest()->paginate(10);
        $finance = Post::with('user')->where('category_id', 7)->where('status', 'published')->latest()->paginate(10);
        // dd($premium);        
        $allCategoriesData = Post::with('user')->with('category')->where('status', 'published')->latest()->get();
        $categories = Category::with('subcategories')->get();  
        $liveData = Post::with('user')->where('is_live', 1)->where('status', 'published')->latest()->get();      
        return view('home', compact('trending', 'latest','popular', 'premium', 'finance', 'allCategoriesData', 'categories', 'liveData'));
    }
    public function categoryPosts($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->where('status', 'published')->latest()->paginate(12);
        return view('frontend.category', compact('category', 'posts'));
    }
    public function edit($id) {
        $post = Post::findOrFail($id);
        // if (auth()->user()->role != 1 && $post->user_id != auth()->id()) {
        //     return back()->with('error', 'Aapko is post ko edit karne ki permission nahi hai.');
        // }
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id', $post->category_id)->get(); 
        $viewPath = 'admin.news.edit';
        return view($viewPath, compact('post', 'categories', 'subcategories'));
    }
    // 2. Update Logic
    public function update(Request $request, $id) {
        $post = Post::findOrFail($id);

        // --- SECURITY CHECK: Author sirf apni post update kar sake ---
        // if (auth()->user()->role != 1 && $post->user_id != auth()->id()) {
        //     return back()->with('error', 'Aapko is post ko update karne ki permission nahi hai.');
        // }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'video_url' => 'nullable|url',
            'tags' => 'nullable|string',
            'is_trending' => 'nullable',
            'is_latest' => 'nullable',
            'is_popular' => 'nullable',
            'is_live'     => 'nullable',
            'is_premium' => 'nullable',
            'status' => 'nullable',
        ]);

        // Basic Fields update
        $post->title = $request->title;
        $post->slug = \Illuminate\Support\Str::slug($request->title);
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->content = $request->content;
        $post->video_url = $request->video_url;
        $post->tags = $request->tags;
        
        // Toggles logic (1 for true, 0 for false)
        $post->is_trending = $request->has('is_trending') ? 1 : 0;
        $post->is_latest = $request->has('is_latest') ? 1 : 0;
        $post->is_popular = $request->has('is_popular') ? 1 : 0;
        $post->is_premium = $request->has('is_premium') ? 1 : 0;
        $post->is_live     = $request->has('is_live') ? 1 : 0;
        $post->status = $request->has('status') ? 'published' : 'draft';

        // Thumbnail Update logic
        if ($request->hasFile('thumbnail')) {
            if ($post->thumbnail) { 
                \Storage::disk('public')->delete($post->thumbnail); 
            }
            $post->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        // Multiple Images Update
        if ($request->hasFile('images')) {
            $newImages = [];
            foreach ($request->file('images') as $file) {
                $newImages[] = $file->store('post_images', 'public');
            }   
            $currentImages = is_array($post->images) ? $post->images : [];
            $post->images = array_merge($currentImages, $newImages);
        }

        $post->save();

        // --- DYNAMIC REDIRECT based on Role ---
        $routePrefix = (auth()->user()->role == 1) ? 'admin' : 'author';

        return redirect()->route($routePrefix . '.posts.index')
                        ->with('success', 'Post Updated Successfully!');
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
    public function englishnews() {
        $posts = Post::latest()->get();
        return view('news.englishnews', compact('posts'));
    }
    public function india() {
        $posts = Post::latest()->paginate(5); 

        return view('news.india', compact('posts'));
    }
    public function movies() {
        $posts = Post::latest()->get();
        return view('news.movies', compact('posts'));
    }
    public function sports() {
        $posts = Post::latest()->get();
        return view('news.sports', compact('posts'));
    }    
    public function premium() {
        $posts = Post::latest()->get();
        return view('news.premium', compact('posts'));
    }      
    public function opinion() {
        $posts = Post::latest()->get();
        return view('news.opinion', compact('posts'));
    }
    public function entertainment() {
        $posts = Post::latest()->get();
        return view('news.entertainment', compact('posts'));
    }
}
