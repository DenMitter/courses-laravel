<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Blog::all();
        return view('admin.blog.index', compact('posts'));
    }
}
