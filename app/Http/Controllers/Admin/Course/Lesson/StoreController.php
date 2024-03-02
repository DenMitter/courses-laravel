<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\Lesson\StoreRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Course $course) {
        try {
            $data = $request->validated();

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            if(isset($data['lesson_file'])) $data['lesson_file'] = Storage::disk('public')->put('/files', $data['lesson_file']);

            $lesson = Lesson::firstOrCreate($data);
            $course->lessons()->attach($lesson);
        } catch(\Exception $exception) {
            abort(500);
        }
        return redirect()->route('admin.course.show', compact('course'));
    }
}