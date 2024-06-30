<?php

namespace App\Http\Controllers\User\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;

class PaymentController extends Controller
{
    public function __invoke(Course $course) {
        $courses = Course::all();
        return view('user.course.payment', compact('course'));
    }
}
