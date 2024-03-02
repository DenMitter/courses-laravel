<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        return view('admin.course.lesson.create', compact('tags', 'course'));
    }
}
