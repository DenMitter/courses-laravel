<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Models\Test;

class IndexController extends Controller
{
    public function __invoke() {
        $tests = Test::all();
        return view('admin.course.test.index', compact('tests'));
    }
}
