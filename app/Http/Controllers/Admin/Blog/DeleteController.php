<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class DeleteController extends Controller
{
    public function __invoke(Blog $blog) {
        $blog->delete();
        return redirect()->route('admin.blog.index');
    }
}
