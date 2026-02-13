<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();
        return view('home', compact('posts'));
    }

    public function create() {
        return view('news.create');
    }

    public function store(Request $request) {
        Post::create($request->all());
        return redirect('/posts')->with('success', 'News Uploaded!');
    }
     public function englishnews() {
        $posts = Post::latest()->get();
        return view('news.englishnews', compact('posts'));
    }
}
