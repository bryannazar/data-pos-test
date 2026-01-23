<?php

namespace Modules\InvoiceCai\Providers;

use Illuminate\Support\ServiceProvider as Provider;

class InvoiceCaiServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->loadTranslations();
        $this->loadViews();
        $this->loadMigrations();
    }

    public function register(): void
    {
        $this->loadRoutes();
    }

    protected function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'invoice-cai');
    }

    protected function loadTranslations(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'invoice-cai');
    }

    protected function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    protected function loadRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/admin.php');
    }

    public function provides(): array
    {
        return [];
    }
}
