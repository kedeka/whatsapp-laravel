<?php

namespace Kedeka\Whatsapp;

class SendContact extends Client implements Contracts\SendContacts
{
    public function to($number, $contact, $name, $nickname = null, $organization = null)
    {
        $number = preg_replace("/[^0-9]/", "", $number);

        $response = $this->request('/send-contact', [
            'number' => $number,
            'contact' => $contact,
            'name' => $name,
            'nickname' => $nickname,
            'organization' => $organization,
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function toGroup($groupId, $contact, $name, $nickname = null, $organization = null)
    {

    }
}
