<?php

namespace App\Http\Controllers\Admin\Teacher;
use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $teacher) {
        return view('admin.teacher.show', compact('teacher'));
    }
}
