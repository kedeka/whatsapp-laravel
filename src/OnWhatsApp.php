<?php

namespace Kedeka\Whatsapp;

class OnWhatsApp extends Client implements Contracts\OnWhatsApps
{
    public function check($phone)
    {
        $phone = preg_replace("/[^0-9]/", "", $phone);

        $response = $this->request('/on-whatsapp', [
            'phone' => $phone,
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['success'] ?? false;
    }
}
