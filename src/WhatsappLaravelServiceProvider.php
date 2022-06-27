<?php

namespace Kedeka\WhatsappLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kedeka\WhatsappLaravel\Commands\SendMessage;

class WhatsappLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('whatsapp-laravel')
            ->hasConfigFile(['whatsapp'])
            ->hasCommand(SendMessage::class);
    }
}
