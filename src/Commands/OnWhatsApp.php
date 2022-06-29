<?php

namespace Kedeka\Whatsapp\Commands;

use Illuminate\Console\Command;

class OnWhatsApp extends Command
{
    public $signature = 'whatsapp:exists {phone}';

    public $description = 'Ensure Phone Number Exists in Whatsapp';

    public function handle(): int
    {
        $phone = $this->argument('phone');
        $exists = app(\Kedeka\Whatsapp\OnWhatsApp::class)->check($phone);
        if($exists){
            $this->info('Phone Number ' . $phone . ' is on whastapp');
        }else{
            $this->warn('Phone Number ' . $phone . ' not in whatsapp');
        }

        return self::SUCCESS;
    }
}
