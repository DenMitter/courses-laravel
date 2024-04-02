<?php

namespace App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\StoreRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        try {
            $data = $request->validated();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            
            $course = Course::firstOrCreate([
                'author' => auth()->user()->name, 
                'author_about' => auth()->user()->about,
                'author_avatar' => auth()->user()->avatar
            ], $data);

            $course->tags()->attach($tagIds);
        } catch(\Exception $exception) {
            abort(500);
        }
        return redirect()->route('admin.course.index');
    }
}
