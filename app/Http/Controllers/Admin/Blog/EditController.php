<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Blog $post) {
        $tags = Tag::all();
        return view('admin.blog.edit', compact('post', 'tags'));
    }
}
