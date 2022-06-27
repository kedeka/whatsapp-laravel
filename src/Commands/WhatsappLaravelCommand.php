<?php

namespace Kedeka\WhatsappLaravel\Commands;

use Illuminate\Console\Command;

class WhatsappLaravelCommand extends Command
{
    public $signature = 'whatsapp-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
