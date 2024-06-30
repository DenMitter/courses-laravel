<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(Course $course) {
        return view('admin.course.test.create', compact('course'));
    }
}
