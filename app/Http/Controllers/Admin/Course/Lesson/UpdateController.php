<?php

namespace App\Http\Controllers\Admin\Course\Lesson;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\Lesson\UpdateRequest;
use App\Models\Lesson;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Lesson $lesson) {
        $data = $request->validated();
        
        if(!isset($data['preview_image'])) $data['preview_image'] = $lesson->preview_image;
        else $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        if(!isset($data['lesson_file'])) $data['lesson_file'] = $lesson->lesson_file;
        else $data['lesson_file'] = Storage::disk('public')->put('/images', $data['lesson_file']);

        $lesson->update($data);
        return redirect()->route('admin.course.lesson.show', compact('lesson'));
    }
}
