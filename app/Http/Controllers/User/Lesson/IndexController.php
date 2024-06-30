<?php

namespace App\Http\Controllers\User\Lesson;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request, Lesson $lesson, Course $course) {
        $lessons = Lesson::all();

        $date = Carbon::parse($lesson->starting);
        $userTime = Carbon::now()->addHours(2);
        return view('user.lesson.index', compact('lesson', 'lessons', 'course', 'date', 'userTime'));
    }
}
