<?php

namespace App\Http\Controllers\Admin\Teacher;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $teacher) {
        $data = $request->validated();
        $teacher->update($data);
        return view('admin.teacher.show', compact('teacher'));
    }
}
