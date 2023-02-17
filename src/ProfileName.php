<?php

namespace Kedeka\Whatsapp;

class ProfileName extends Client implements Contracts\Fetch
{
    public function fetch($phone)
    {
        $phone = preg_replace("/[^0-9]/", "", $phone);

        $response = $this->request('/profile', [
            'phone' => $phone,
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['name'] ?? null;
    }
}
