<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $teacher) {
        $data = $request->validated();

        $studentIds = $data['student_ids'];
        unset($data['student_ids']);

        $teacher->update($data);
        $teacher->students()->sync($studentIds);

        return view('admin.teacher.show', compact('teacher'));
    }
}