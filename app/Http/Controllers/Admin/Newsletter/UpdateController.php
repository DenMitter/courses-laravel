<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Newsletter\UpdateRequest;
use App\Models\Newsletter;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Newsletter $newsletter) {
        $data = $request->validated();
        $newsletter->update($data);
        return view('admin.newsletter.show', compact('newsletter'));
    }
}
