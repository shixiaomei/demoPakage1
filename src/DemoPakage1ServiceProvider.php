<?php

namespace wojianduanfa\DemoPakage1;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use wojianduanfa\DemoPakage1\Commands\DemoPakage1Command;

class DemoPakage1ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('demopakage1')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_demopakage1_table')
            ->hasCommand(DemoPakage1Command::class);
    }
}
