<?php

namespace Kedeka\WhatsappLaravel\Enums;

use Illuminate\Support\Str;

enum MessageType: int
{
    case Text = 0;
    case Image = 1;
    case Button = 2;
    case Template = 3;
    case List = 4;

    public function label(): string
    {
        return match ($this) {
            self::Text => 'Text',
            self::Image => 'Image',
            self::Button => 'Button',
            self::Template => 'Template',
            self::List => 'List',
        };
    }

    public function featureKey(): string
    {
        return match ($this) {
            self::Text => 'message',
            self::Image => 'media',
            self::Button => 'button',
            self::Template => 'template',
            self::List => 'list',
        };
    }

    public function slug(): string
    {
        return Str::slug($this->label());
    }
}
