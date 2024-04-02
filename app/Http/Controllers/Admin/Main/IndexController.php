<?php

namespace App\Http\Controllers\Admin\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Newsletter;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $courses = Course::all();
        $lessons = Lesson::all();
        $users = User::all();
        $newsletter = Newsletter::all();
        return view('admin.main.index', compact('courses', 'lessons', 'users', 'newsletter'));
    }
}
