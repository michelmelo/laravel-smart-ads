<?php

namespace MichelMelo\LaravelSmartAds;

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use MichelMelo\LaravelSmartAds\Components\SmartAdComponent;
use MichelMelo\LaravelSmartAds\Http\Livewire\AdReportComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSmartAdsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
        ->name('laravel-smart-ads')
        ->hasConfigFile()
        ->hasViews()
        ->hasRoute('web')
        ->hasAssets()
        ->hasViewComponents('', SmartAdComponent::class)
        ->hasMigrations(['create_smart_ads_table', 'create_smart_ads_tracking_table']);
    }

    public function bootingPackage()
    {
        $this->registerLivewireComponents();
    }

    public function registerLivewireComponents()
    {
        Livewire::component('ad-report-component', AdReportComponent::class);
    }

    /**
     * Register the application services.
     */
    public function registeringPackage()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-smart-ads', function () {
            return new LaravelSmartAds;
        });
    }
}
