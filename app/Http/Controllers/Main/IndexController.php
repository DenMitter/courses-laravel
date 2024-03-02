<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;

class IndexController extends Controller
{
    public function __invoke() {
        $courses = Course::all()->where('is_published', 1);
        return view('main.index', compact('courses'));
    }
}
