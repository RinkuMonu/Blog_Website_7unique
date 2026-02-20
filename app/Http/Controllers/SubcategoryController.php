<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Slug ke liye zaroori hai

class SubcategoryController extends Controller
{
    // Index page jahan table aur form dikhega
    public function index()
    {
        $categories = Category::all(); // Dropdown ke liye
        $subcategories = Subcategory::with('category')->get(); // Table ke liye (Eager Loading)
        
        return view('admin.subcategories.index', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->back()->with('success', 'Subcategory added successfully!');
    }

    public function destroy($id)
    {
        $sub = Subcategory::findOrFail($id);
        $sub->delete();
        return redirect()->back()->with('success', 'Subcategory deleted successfully!');
    }
}