<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Lesson $lesson) {
        $tags = Tag::all();
        return view('admin.course.lesson.show', compact('lesson', 'tags'));
    }
}
