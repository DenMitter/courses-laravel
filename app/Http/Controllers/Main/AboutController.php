<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class AboutController extends Controller
{
    public function __invoke() {
        $users = User::all();
        $courses = Course::all();

        return view('main.about', compact('users', 'courses'));
    }
}
