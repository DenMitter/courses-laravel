<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        return view('admin.course.edit', compact('course', 'tags'));
    }
}
