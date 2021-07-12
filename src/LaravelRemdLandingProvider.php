<?php
namespace kodeops\LaravelRemdLanding;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LaravelRemdLandingProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-remd-landing')
            ->hasViews();
    }
}
