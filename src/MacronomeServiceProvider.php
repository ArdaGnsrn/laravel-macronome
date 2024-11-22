<?php

namespace ArdaGnsrn\Macronome;

use ArdaGnsrn\Macronome\Commands\MacronomeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MacronomeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-macronome')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_macronome_table')
            ->hasCommand(MacronomeCommand::class);
    }
}
