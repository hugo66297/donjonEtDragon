<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useTailwind();
        Filament::serving(function () {
            Filament::registerUserMenuItems([
                'logout' => UserMenuItem::make()
                    ->url(route('logout')),
            ]);
        });
    }
}
