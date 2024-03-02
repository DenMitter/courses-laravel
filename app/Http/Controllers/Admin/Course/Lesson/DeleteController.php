<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;

class DeleteController extends Controller
{
    public function __invoke(Lesson $lesson, Course $course) {
        $lesson->delete();
        return back();
    }
}
