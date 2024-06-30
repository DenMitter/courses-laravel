<?php

namespace App\Http\Controllers\Admin\Teacher;
use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $teacher) {
        $students = User::all()->where("role", 3);
        return view('admin.teacher.edit', compact('teacher', 'students'));
    }
}
