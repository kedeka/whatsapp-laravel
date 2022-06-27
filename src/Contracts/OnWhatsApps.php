<?php

namespace Kedeka\WhatsappLaravel\Contracts;

interface OnWhatsApps
{
    /**
     * check phone number.
     *
     * @param  string $phone
     * @return boolean
     */

    public function check($phone);
}
