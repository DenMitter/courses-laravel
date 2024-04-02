<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\SubscribeRequest;
use App\Models\NewsletterUser;

class NewsletterSubscribeController extends Controller
{
    public function __invoke(SubscribeRequest $request)
    {
        $data = $request->validated();

        NewsletterUser::firstOrCreate($data);

        session()->flash('success', 'Дія успішно виконана!');
        return redirect()->route('main.index');
    }
}
