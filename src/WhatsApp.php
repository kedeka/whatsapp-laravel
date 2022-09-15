<?php
namespace Kedeka\Whatsapp;

class WhatsApp
{
    public function sendMessage()
    {
        return new SendMessage;
    }

    public function sendContact()
    {
        return new SendContact;
    }

    public function onWhatsApp()
    {
        return new OnWhatsApp;
    }

    public function deviceIsRunning()
    {
        return new DeviceIsRunning;
    }

    public function template(string $template, array $replaces)
    {
        return str_replace(array_map(fn ($key) => "#{$key}", array_keys($replaces)), array_values($replaces), $template);
    }
}
