<?php

namespace App\Http\Controllers\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();

        $date = Carbon::parse($course->starting);
        return view('course.index', compact('course', 'tags', 'date'));
    }
}
