<?php

declare(strict_types=1);

namespace App\Providers;

use App\Services\VersionService;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('services', fn ($app): VersionService => new VersionService());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
