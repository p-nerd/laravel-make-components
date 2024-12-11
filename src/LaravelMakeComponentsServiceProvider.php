<?php

namespace PNerd\LaravelMakeComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PNerd\LaravelMakeComponents\Commands\LaravelMakeComponentsCommand;

class LaravelMakeComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-make-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_make_components_table')
            ->hasCommand(LaravelMakeComponentsCommand::class);
    }
}
