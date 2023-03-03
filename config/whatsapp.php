<?php return [
    'key' => env('WHATSAPP_API_KEY'),
    'sender' => env('WHATSAPP_API_SENDER'),
    'device' => env('WHATSAPP_API_DEVICE'),
    'url' => env('WHATSAPP_API_URL', 'https://kedeka.com/api'),
    'enable' => env('WHATSAPP_API_ENABLE') ?: false,
    'timeout' => env('WHATSAPP_API_TIMEOUT') ?: 15,
];
