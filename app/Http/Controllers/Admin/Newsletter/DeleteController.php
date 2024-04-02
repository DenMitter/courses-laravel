<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;

class DeleteController extends Controller
{
    public function __invoke(Newsletter $newsletter) {
        $newsletter->delete();
        return redirect()->route('admin.newsletter.index');
    }
}
