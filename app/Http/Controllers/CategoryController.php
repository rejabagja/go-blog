<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category) {
        return view('posts', [
            'title' => "Post By Category : $category->name",
            'posts' => $category->posts->load(['category', 'author']), // solusi n+1 problem lazy eager loading
        ]);
    }
}
