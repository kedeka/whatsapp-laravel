<?php

namespace Kedeka\Whatsapp;

class DeviceIsRunning extends Client
{
    public function check($phone)
    {
        $response = $this->request('/device-is-running');

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['success'] ?? false;
    }
}
