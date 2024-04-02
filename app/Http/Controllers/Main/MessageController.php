<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\MessageRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Client\Response;

class MessageController extends Controller
{
    public function __invoke(MessageRequest $request)
    {
        if($request->ajax()){
            $data = $request->validated();

            $token = env('TELEGRAM_BOT_TOKEN');
            $chatId = env('TELEGRAM_CHAT_ID');

            $message = "✅ <b>Нова заявка!</b>\n";
            $message .= "➖➖➖➖➖➖➖➖➖➖➖\n\n";
            $message .= "<b>Ім'я:</b> " . $data['name'] . "\n";
            $message .= "<b>Номер телефону:</b> " . $data['phone'];

            $client = new Client(['base_uri' => 'https://api.telegram.org/bot' . $token . '/']);

            // $response = $client->request('POST', 'sendMessage', [
            //     'json' => [
            //         'chat_id' => $chatId,
            //         'text' => $message,
            //         'parse_mode' => 'HTML'
            //     ]
            // ]);

            $response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
            );
            // return Response::json($response);
            return 'yes';

            // Обробка відповіді, якщо потрібно
            // $statusCode = $response->getStatusCode();
            // $body = $response->getBody()->getContents();;
        }
        else{
            return 'no';
        }
        // return redirect()->route('main.index');
    }
}
