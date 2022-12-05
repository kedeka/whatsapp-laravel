<?php
namespace Kedeka\Whatsapp;

use GuzzleHttp\Client;
use Kedeka\Whatsapp\Enums\MessageType;

class SendMessage implements Contracts\SendMessages
{
    public function to($number, $message, $type = MessageType::Text)
    {
        $client = new Client();
        $device = config('whatsapp.device');
        $apiUrl = config('whatsapp.url');

        $endpoint = sprintf('%s/%s/%s', $apiUrl, $device, 'send-message');

        if(is_string($message)){
            $message = [
                'text' => $message
            ];
        }

        $number = preg_replace("/[^0-9]/", "", $number);

        $response = $client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('whatsapp.key'),
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'number' => $number,
                'message' => $message,
                'type' => $type->value,
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function toGroup($number, $message, $type = MessageType::Text)
    {
        $client = new Client();
        $device = config('whatsapp.device');
        $apiUrl = config('whatsapp.url');

        $endpoint = sprintf('%s/%s/%s', $apiUrl, $device, 'send-message');

        if (is_string($message)) {
            $message = [
                'text' => $message
            ];
        }

        $number = preg_replace("/[^0-9]/", "", $number) . "@g.us";

        $response = $client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('whatsapp.key'),
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'number' => $number,
                'message' => $message,
                'type' => $type->value,
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
