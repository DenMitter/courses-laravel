<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Blog $post) {
        $tags = Tag::all();
        return view('admin.blog.show', compact('post', 'tags'));
    }
}
