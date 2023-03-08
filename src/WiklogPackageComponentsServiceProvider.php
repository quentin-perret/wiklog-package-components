<?php

namespace Wiklog\WiklogPackageComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wiklog\WiklogPackageComponents\Commands\WiklogPackageComponentsCommand;

class WiklogPackageComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wiklog-package-components')
            // ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_wiklog-package-components_table')
            ->hasCommand(WiklogPackageComponentsCommand::class);
    }
}
