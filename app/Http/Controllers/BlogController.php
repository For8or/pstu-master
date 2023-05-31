<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index');
    }
    public function show(Post $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}
