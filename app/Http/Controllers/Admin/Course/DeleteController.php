<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;

class DeleteController extends Controller
{
    public function __invoke(Course $course) {
        $course->delete();
        return redirect()->route('admin.course.index');
    }
}
