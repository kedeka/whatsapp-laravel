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

    public function toGroup($groupId, $message)
    {
        $client = new Client();
        $endpoint = sprintf('%s/send-message-group', config('whatsapp.domain'));

        $senders = explode(',', config('whatsapp.sender'));
        $sender = $senders[0] ?? null;

        if ($sender) {
            $response = $client->request('POST', $endpoint, [
                'headers' => [
                    'X-Kedeka-Api-Key' => config('whatsapp.key'),
                    'X-Kedeka-Domain' => url('/')
                ],
                'form_params' => [
                    'sender' => $sender,
                    'number' => $groupId,
                    'message' => $message,
                ]
            ]);

            return data_get(json_decode($response->getBody()->getContents()), 'response');
        }
    }
}
