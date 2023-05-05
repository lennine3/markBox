<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;

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
        //

        view()->composer(
            '*',
            function ($view) {
                $logo = Cache::rememberForever('logo_path_cache', function () {
                    return show_logo();
                });
                $view->with([
                    'logo' => $logo,
                ]);
            }
        );
        Schema::defaultStringLength(191);
    }
}
