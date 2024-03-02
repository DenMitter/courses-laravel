<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Lesson;

class IndexController extends Controller
{
    public function __invoke() {
        $lessons = Lesson::all();
        return view('admin.course.lesson.index', compact('lessons'));
    }
}
