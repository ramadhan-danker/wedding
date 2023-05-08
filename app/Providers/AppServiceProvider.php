<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Undangan Pernikahan')
                    ->icon('heroicon-s-mail')->collapsed(),
                NavigationGroup::make()
                    ->label('Undangan Ulang Tahun')
                    ->icon('heroicon-s-mail')->collapsed(),
                NavigationGroup::make()
                    ->label('System')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
            ]);
        });
    }
}