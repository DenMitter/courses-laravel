<?php

namespace App\Http\Controllers\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        $courses = Course::all()->count();
        $teachers = User::where('role', '=', 2)->count();
        $users = User::all()->count();

        $date = Carbon::parse($course->starting);
        return view('course.index', compact('course', 'tags', 'date', 'courses', 'teachers', 'users'));
    }
}
