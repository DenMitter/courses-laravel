<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Lesson $lesson, Course $course) {
        $tags = Tag::all();
        return view('admin.course.lesson.edit', compact('lesson', 'tags', 'course'));
    }
}
