<?php

namespace VendorName\Skeleton;

use Illuminate\Support\ServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends ServiceProvider
{
     /**
     * Register any application services.
     */
    public function register(): void
    {
  
    }

    /**
     * Bootstrap any application services.
     */
 public function boot(): void
    {
        // Load the package views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

        // Publishing is only available when running from the console
        if (! $this->app->runningInConsole()) {
            return;
        }

        // Publish the package configuration file
        $this->publishes([
            __DIR__.'/../config/skeleton.php' => config_path('skeleton.php'),
        ], ['skeleton', 'skeleton-config']);

        // Publish the package views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/skeleton'),
        ], ['skeleton', 'skeleton-views']);

        // Publish the package migrations
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['skeleton', 'skeleton-migrations']);

        // Register the package Artisan commands
        $this->commands([
            SkeletonCommand::class
        ]);
    }
}
