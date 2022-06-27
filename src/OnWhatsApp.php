<?php

namespace Kedeka\Whatsapp;

use GuzzleHttp\Client;

class OnWhatsApp implements Contracts\OnWhatsApps
{
    public function check($phone)
    {
        $client = new Client();
        $device = config('whatsapp.device');
        $apiUrl = config('whatsapp.url');

        $endpoint = sprintf('%s/%s/%s', $apiUrl, $device, 'on-whatsapp');

        $response = $client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('whatsapp.key'),
                'Accept' => 'application/json',
            ],
            'form_params' => array_filter([
                'phone' => $phone,
            ])
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['success'] ?? false;
    }
}
