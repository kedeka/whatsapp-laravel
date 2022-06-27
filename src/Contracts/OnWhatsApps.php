<?php

namespace Kedeka\Whatsapp\Contracts;

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
