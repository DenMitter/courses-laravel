<?php

namespace App\Http\Controllers\Admin\Teacher;
use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $teachers = User::where('role', 2)->get();
        return view('admin.teacher.index', compact('teachers'));
    }
}
