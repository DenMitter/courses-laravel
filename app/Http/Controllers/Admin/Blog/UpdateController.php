<?php

namespace App\Http\Controllers\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Blog $post) {
        $data = $request->validated();
        
        if(!isset($data['preview_image'])) $data['preview_image'] = $post->preview_image;
        else $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $post->update($data);
        $post->tags()->sync($tagIds);
        return redirect()->route('admin.blog.show', compact('post'));
    }
}
