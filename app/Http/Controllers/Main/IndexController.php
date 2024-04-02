<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function __invoke() {
        $courses = Course::all()->where('is_published', 1);
        $tags = Tag::all();
        $date = new Carbon;
        $users = User::all();
        return view('main.index', compact('courses', 'tags', 'date', 'users'));
    }
}
