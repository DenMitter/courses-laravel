<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke() {
        $tags = Tag::all();
        return view('admin.blog.create', compact('tags'));
    }
}
