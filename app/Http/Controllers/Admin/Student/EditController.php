<?php

namespace App\Http\Controllers\Admin\Student;
use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $student) {
        $teachers = User::all()->where("role", 3);
        return view('admin.student.edit', compact('student', 'teachers'));
    }
}
