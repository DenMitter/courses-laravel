<?php

namespace App\Http\Controllers\User\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Test;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __invoke(Course $course) {
        $tags = Tag::all();
        $user = auth()->user();
        $lessons = Lesson::all();
        $tests = Test::all();
        $courses = Course::all();

        $date = Carbon::parse($course->starting);
        $userTime = Carbon::now()->addHours(2);

        $studyStatus = DB::table('user_course')->where('user_id', $user->id)->where('course_id', $course->id)->value('study_status');

        return view('user.course.index', compact('course', 'user', 'tags', 'lessons', 'courses', 'date', 'userTime', 'studyStatus', 'tests'));
    }
}
