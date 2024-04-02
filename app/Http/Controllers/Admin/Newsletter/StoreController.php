<?php

namespace App\Http\Controllers\Admin\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Newsletter\StoreRequest;
use App\Mail\Main\NewsletterMail;
use App\Models\Newsletter;
use App\Models\NewsletterUser;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        // Отримання всіх користувачів з таблиці newsletter_users, де status = 1
        $subscribedUsers = NewsletterUser::where('status', 1)->get();

        // Відправлення повідомлення кожному користувачу
        foreach ($subscribedUsers as $user) {
            // Відправка листа
            // Mail::to($user->email)->send(new NewsletterMail($data['content']));
            Mail::to($user->email)->send((new NewsletterMail(strval($data['content']), strval($data['title'])))->withSwiftMessage(function ($message) {
                $message->getHeaders()->addTextHeader('Content-Type', 'text/html');
            }));
        }

        Newsletter::firstOrCreate($data);
        return redirect()->route('admin.newsletter.index');
    }
}
