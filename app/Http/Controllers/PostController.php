<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('posts', [
            "title" => "Posts",
            "posts" => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
            // "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }
}
