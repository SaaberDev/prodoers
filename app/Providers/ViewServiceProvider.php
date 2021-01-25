<?php

namespace App\Providers;

use App\Http\View\Composers\ViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('user_panel.includes.header', ViewComposer::class);
        View::composer('user_panel.includes.footer', ViewComposer::class);
    }
}
