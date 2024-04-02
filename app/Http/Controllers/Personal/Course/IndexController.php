<?php

namespace App\Http\Controllers\Personal\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        $user = auth()->user();
        $lessons = Lesson::all();
        $courses = Course::all();

        $date = Carbon::parse($course->starting);
        $userTime = Carbon::now()->addHours(2);
        return view('personal.course.index', compact('course', 'user', 'tags', 'lessons', 'courses', 'date', 'userTime'));
    }
}
