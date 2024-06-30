<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\Test\UpdateRequest;
use App\Models\Test;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Test $test) {
        $data = $request->validated();

        $test->update($data);
        return redirect()->route('admin.course.test.show', compact('test'));
    }
}
