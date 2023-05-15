<?php

namespace Kedeka\Whatsapp\Formatters;

use Illuminate\Support\Str;

class Number
{
    public static function format(string $number, bool $jid = false): string
    {
        $number = preg_replace('/[^0-9]/', '', $number);
        if (Str::startsWith($number, '0')) {
            $number = '62' . substr($number, 1);
        }
        if ($jid && !Str::endsWith($number, '@s.whatsapp.net') && !Str::endsWith($number, '@g.us')) {
            $number .= '@s.whatsapp.net';
        }

        return $number;
    }

    public static function normalize(string $jid): string
    {
        return head(explode('@s.whatsapp.net', $jid));
    }
}