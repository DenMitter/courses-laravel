<?php

namespace App\Http\Controllers\Main;
use App\Http\Controllers\Controller;
use App\Http\Requests\Main\HelpRequest;
use App\Mail\Main\HelpMail;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
{
    public function __invoke(HelpRequest $request) {
        $data = $request->validated();

        // Відправка листа
        Mail::to(env('RETURN_EMAIL'))->send((new HelpMail(strval($data['content']), strval($data['email']), strval($data['phone']), strval($data['name'])))->withSwiftMessage(function ($message) {
            $message->getHeaders()->addTextHeader('Content-Type', 'text/html');
        }));

        return back();
    }
}
