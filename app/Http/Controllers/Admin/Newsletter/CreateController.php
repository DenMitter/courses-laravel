<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        return view('admin.newsletter.create');
    }
}
