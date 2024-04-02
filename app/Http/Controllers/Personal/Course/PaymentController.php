<?php

namespace App\Http\Controllers\Personal\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;

class PaymentController extends Controller
{
    public function __invoke(Course $course) {
        $courses = Course::all();
        return view('personal.course.payment', compact('course'));
    }
}
