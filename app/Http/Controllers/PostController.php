<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "All Posts",
            // "posts" => Post::all(),
            // "posts" => Post::latest()->get(), // indeksing berdasarkan posting terbaru
            "posts" => Post::with(['author', 'category'])->latest()->get(), // salah satu solusi n+1 problem dengan eager loading
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
