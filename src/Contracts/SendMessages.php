<?php

namespace Kedeka\Whatsapp\Contracts;

interface SendMessages
{
    /**
     * to message.
     *
     * @param  string $phone
     * @param  string $message
     * @return json
     */

    public function to($phone, $message);

    /**
     * toGroup message.
     *
     * @param  string $groupId
     * @param  string $message
     * @return json
     */

    public function toGroup($groupId, $message);
}
