<?php

namespace Kedeka\Whatsapp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kedeka\Whatsapp\WhatsApp
 */
class WhatsApp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kedeka\Whatsapp\WhatsApp::class;
    }
}
