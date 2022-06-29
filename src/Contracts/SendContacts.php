<?php

namespace Kedeka\Whatsapp\Contracts;

interface SendContacts
{
    /**
     * to whatsapp id.
     *
     * @param  string $phone
     * @param  string $contact
     * @param  string $name
     * @param  string|null $nickname
     * @param  string|null $organization
     * @return json
     */

    public function to($phone, $contact, $name, $nickname, $organization);

    /**
     * to group.
     *
     * @param  string $groupId
     * @param  string $contact
     * @param  string $name
     * @param  string|null $nickname
     * @param  string|null $organization
     * @return json
     */

    public function toGroup($groupId, $contact, $name, $nickname, $organization);
}
