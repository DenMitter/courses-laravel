<?php

namespace App\Http\Controllers\Personal\Course;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TakeCourseController extends Controller
{
    public function __invoke(Course $course) {
        $user = Auth::user();
        $user->courses()->attach($course);
        return back();
    }
}
