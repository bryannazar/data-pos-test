<?php

namespace Modules\BlogTest2\Providers;

use Illuminate\Support\ServiceProvider;

class BlogTest2ServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Registrar namespace de vistas
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'blogtest2');

        // Registrar listener para menú
        $this->app['events']->listen(
            \App\Events\Menu\AdminCreated::class,
            \Modules\BlogTest2\Listeners\AddToAdminMenu::class
        );
    }
}
