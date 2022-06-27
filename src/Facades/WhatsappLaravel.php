<?php

namespace Kedeka\WhatsappLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kedeka\WhatsappLaravel\WhatsappLaravel
 */
class WhatsappLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'whatsapp-laravel';
    }
}
