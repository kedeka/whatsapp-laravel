<?php

namespace Kedeka\Whatsapp;

use Kedeka\Whatsapp\Enums\MessageType;

class SendMessage extends Client implements Contracts\SendMessages
{
    public function to($number, $message, $type = MessageType::Text)
    {
        $number = preg_replace("/[^0-9]/", "", $number);

        $response = $this->request('/send-message', [
            'number' => $number,
            'message' => $this->parseMessage($message),
            'type' => $type->value,
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function toGroup($number, $message, $type = MessageType::Text)
    {
        $response = $this->request('/send-message', [
            'number' => $number,
            'message' => $this->parseMessage($message),
            'type' => $type->value,
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
