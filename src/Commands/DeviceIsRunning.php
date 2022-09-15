<?php

namespace Kedeka\Whatsapp\Commands;

use Illuminate\Console\Command;

class DeviceIsRunning extends Command
{
    public $signature = 'whatsapp:running';
    public $description = 'Ensure Device is Running';

    public function handle(): int
    {
        $running = app(\Kedeka\Whatsapp\DeviceIsRunning::class)->check();
        if($running){
            $this->info('Device is running');
        }else{
            $this->warn('Device not running');
        }

        return self::SUCCESS;
    }
}
