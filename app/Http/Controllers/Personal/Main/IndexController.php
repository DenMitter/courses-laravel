<?php

namespace App\Http\Controllers\Personal\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke() {
        $courses = Course::all()->where('is_published', 1);
        $tags = Tag::all();
        $user = auth()->user();
        $lessons = Lesson::all();
        return view('personal.index', compact('courses', 'user', 'tags', 'lessons'));
    }
}
