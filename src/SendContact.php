<?php

namespace Kedeka\Whatsapp;

use GuzzleHttp\Client;

class SendContact implements Contracts\SendContacts
{
    public function to($number, $contact, $name, $nickname = null, $organization = null)
    {
        $client = new Client();
        $device = config('whatsapp.device');
        $apiUrl = config('whatsapp.url');

        $endpoint = sprintf('%s/%s/%s', $apiUrl, $device, 'send-contact');

        $response = $client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('whatsapp.key'),
                'Accept' => 'application/json',
            ],
            'form_params' => [
                'number' => $number,
                'contact' => $contact,
                'name' => $name,
                'nickname' => $nickname,
                'organization' => $organization,
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function toGroup($groupId, $contact, $name, $nickname = null, $organization = null)
    {

    }
}
