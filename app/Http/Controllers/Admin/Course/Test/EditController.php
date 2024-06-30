<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Test;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Test $test, Course $course) {
        $tags = Tag::all();
        return view('admin.course.test.edit', compact('test', 'tags', 'course'));
    }
}
