<?php

namespace App\Http\Controllers\Admin\Course\Test;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\Test\StoreRequest;
use App\Models\Course;
use App\Models\Test;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Course $course) {
        try {
            $data = $request->validated();
            $test = Test::firstOrCreate($data);
            $course->tests()->attach($test);
        } catch(\Exception $exception) {
            abort(500);
        }
        return redirect()->route('admin.course.show', compact('course'));
    }
}