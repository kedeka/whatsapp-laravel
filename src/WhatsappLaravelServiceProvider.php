<?php

namespace Kedeka\WhatsappLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kedeka\WhatsappLaravel\Commands\WhatsappLaravelCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_whatsapp-laravel_table')
            ->hasCommand(WhatsappLaravelCommand::class);
    }
}
