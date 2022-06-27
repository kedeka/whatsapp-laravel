<?php

namespace Kedeka\Whatsapp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Validation\Rule;

class ServiceProvider extends PackageServiceProvider
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
            ->hasCommands([
                Commands\SendMessage::class,
                Commands\OnWhatsApp::class,
            ]);
    }

    public function bootingPackage()
    {
        Rule::macro('whatsapp', function () {
            return new Rules\OnWhatsApp;
        });
    }
}
