<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        try {
            $data = $request->validated();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            
            $post = Blog::firstOrCreate($data);

            $post->tags()->attach($tagIds);
        } catch(\Exception $exception) {
            abort(500);
        }
        return redirect()->route('admin.blog.index');
    }
}
