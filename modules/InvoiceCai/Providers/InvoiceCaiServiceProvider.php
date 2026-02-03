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
        $this->loadRoutes();
        $this->registerDocumentObserver();
        $this->loadViewComposers();
    }

    public function register(): void
    {
        //
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

    protected function registerDocumentObserver(): void
    {
        \App\Models\Document\Document::observe(\Modules\InvoiceCai\Observers\DocumentObserver::class);
    }

    protected function loadViewComposers(): void
    {
        // Composer for all invoice views to inject fiscal data
        view()->composer([
            'components.documents.template.default',
            'components.documents.template.classic',
            'components.documents.template.modern',
        ], function ($view) {
            $document = $view->getData()['document'] ?? null;
            
            if ($document && $document->type === 'invoice') {
                // Ensure fiscal fields are loaded from database
                if (!isset($document->cai)) {
                    $document->cai = $document->getAttributes()['cai'] ?? null;
                    $document->fecha_limite_emision = $document->getAttributes()['fecha_limite_emision'] ?? null;
                    $document->rango_autorizado = $document->getAttributes()['rango_autorizado'] ?? null;
                }
                
                // Add fiscal inject partial to view data so it can be included
                $view->with('__InvoiceCaiFiscalInject', true);
            }
        });
        
        // Composer for parent views to include the inject partial early
        view()->composer([
            'sales.invoices.show',
            'sales.invoices.print_default',
            'sales.invoices.print_classic',
            'sales.invoices.print_modern',
            'portal.invoices.show',
            'portal.invoices.signed',
            'portal.invoices.preview',
        ], function ($view) {
            $invoice = $view->getData()['invoice'] ?? null;
            
            if ($invoice && $invoice->type === 'invoice') {
                // Ensure fiscal fields are accessible
                if (!isset($invoice->cai)) {
                    $invoice->cai = $invoice->getAttributes()['cai'] ?? null;
                    $invoice->fecha_limite_emision = $invoice->getAttributes()['fecha_limite_emision'] ?? null;
                    $invoice->rango_autorizado = $invoice->getAttributes()['rango_autorizado'] ?? null;
                }
                
                // Render the inject partial which contains @push directives
                // This needs to happen before the template renders
                echo view('invoice-cai::inject-fiscal', ['document' => $invoice])->render();
            }
        });
    }

    public function provides(): array
    {
        return [];
    }
}
