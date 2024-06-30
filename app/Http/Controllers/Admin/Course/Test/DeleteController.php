<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Test;

class DeleteController extends Controller
{
    public function __invoke(Test $test, Course $course) {
        $test->delete();
        return back();
    }
}
