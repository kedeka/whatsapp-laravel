<?php

namespace Kedeka\WhatsappLaravel\Commands;

use Illuminate\Console\Command;

class SendMessage extends Command
{
    public $signature = 'whatsapp:send-to {phone} {message}';

    public $description = 'Send Message to Whatsapp Number';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
