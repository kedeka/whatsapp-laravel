<?php

namespace Kedeka\WhatsappLaravel\Commands;

use Illuminate\Console\Command;
use Kedeka\WhatsappLaravel\Enums\MessageType;

class SendMessage extends Command
{
    public $signature = 'whatsapp:send-to {phone} {text}';

    public $description = 'Send Message to Whatsapp Number';

    public function handle(): int
    {
        $phone = $this->argument('phone');
        $text = $this->argument('text');
        $type = MessageType::Text;

        $message = [
            'text' => $text
        ];

        app(\Kedeka\WhatsappLaravel\SendMessage::class)->to($phone, $message, $type);

        $this->comment('Message sent to ' . $phone);

        return self::SUCCESS;
    }
}
