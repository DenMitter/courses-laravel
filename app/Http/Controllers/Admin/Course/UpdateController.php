<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\UpdateRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Course $course) {
        $data = $request->validated();
        
        if(!isset($data['preview_image'])) $data['preview_image'] = $course->preview_image;
        else $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $course->update($data);
        $course->tags()->sync($tagIds);
        return redirect()->route('admin.course.show', compact('course'));
    }
}
