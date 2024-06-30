<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Test $test) {
        $tags = Tag::all();
        return view('admin.course.test.show', compact('test', 'tags'));
    }
}
