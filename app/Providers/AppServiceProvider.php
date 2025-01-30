<?php

namespace App\Providers;

use App\Repositories\Interfaces\SectionRepositoryInterface;
use App\Repositories\Interfaces\YearRepositoryInterface;
use App\Repositories\SectionRepository;
use App\Repositories\YearRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(YearRepositoryInterface::class, YearRepository::class);
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(125);
        // URL::forceScheme('https');
    }
}
