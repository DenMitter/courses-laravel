<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;

class ShowController extends Controller
{
    public function __invoke(Newsletter $newsletter) {
        return view('admin.newsletter.show', compact('newsletter'));
    }
}
