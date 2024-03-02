<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke() {
        $tags = Tag::all();
        return view('admin.course.create', compact('tags'));
    }
}
