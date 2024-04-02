<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;

class IndexController extends Controller
{
    public function __invoke() {
        $newsletters = Newsletter::all();
        return view('admin.newsletter.index', compact('newsletters'));
    }
}
