<?php

namespace Kedeka\Whatsapp;

use GuzzleHttp\Client;

class DeviceIsRunning
{
    public function check($phone)
    {
        $client = new Client();
        $device = config('whatsapp.device');
        $apiUrl = config('whatsapp.url');

        $endpoint = sprintf('%s/%s/%s', $apiUrl, $device, 'device-is-running');

        $response = $client->request('POST', $endpoint, [
            'headers' => [
                'Authorization' => 'Bearer ' . config('whatsapp.key'),
                'Accept' => 'application/json',
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['success'] ?? false;
    }
}
