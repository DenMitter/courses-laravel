<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $student) {
        $data = $request->validated();
        $student->update($data);

        return view('admin.student.show', compact('student'));
    }
}