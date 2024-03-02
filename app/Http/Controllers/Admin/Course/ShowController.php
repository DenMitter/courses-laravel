<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        $lessons = Lesson::all();
        return view('admin.course.show', compact('course', 'tags', 'lessons'));
    }
}
