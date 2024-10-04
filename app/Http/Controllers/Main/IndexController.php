<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() {
        $courses = Course::query()
            ->orderBy('id', 'desc')
            ->where('is_published', 1)
            ->paginate(10, ['title', 'preview_image', 'color', 'price', 'lesson_count']);

        $tags = Tag::query()->get(['title', 'color']);
        $users = User::query()->count(['id']);

        return response()->json([
            'success' => true,
            'courses' => $courses,
            'tags' => $tags,
            'users' => $users,
        ]);
    }
}
