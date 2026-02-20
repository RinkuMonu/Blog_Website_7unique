<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate(['name' => 'required|unique:categories']);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return back()->with('success', 'Category added!');
    }
    
    public function destroy($id) {
        Category::destroy($id);
        return back()->with('success', 'Category deleted!');
    }
}
