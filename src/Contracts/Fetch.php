<?php

namespace Kedeka\Whatsapp\Contracts;

interface Fetch
{
    /**
     * fetch whatsapp info.
     *
     * @param  string $phone
     * @return mixed
     */

    public function fetch($phone);
}
