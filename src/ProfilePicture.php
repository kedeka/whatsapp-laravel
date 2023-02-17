<?php

namespace Kedeka\Whatsapp;

class ProfilePicture extends Client implements Contracts\Fetch
{
    public function fetch($phone)
    {
        $phone = preg_replace("/[^0-9]/", "", $phone);

        $response = $this->request('/profile-picture', [
            'phone' => $phone,
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        return $data['url'] ?? null;
    }
}
