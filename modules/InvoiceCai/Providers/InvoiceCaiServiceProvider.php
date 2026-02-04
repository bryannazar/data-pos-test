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
        
        // Apply translation overrides after the application is booted
        // This ensures core translations are loaded first
        $this->app->booted(function () {
            $this->overrideCoreTranslations();
        });
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

    protected function overrideCoreTranslations(): void
    {
        $translator = app('translator');
        
        // Define translation overrides as flat keys
        $overrides = [
            'en-GB' => [
                'general.tax_number' => 'RTN',
                'customers.form_description.billing' => 'The RTN appears in every invoice issued to the customer. The selected currency becomes the default currency for this customer.',
                'vendors.form_description.billing' => 'The RTN appears in every bill issued to you. The selected currency becomes the default currency for this vendor.',
                'companies.form_description.billing' => 'The RTN appears in every invoice/bill. Dashboard and Reports are shown under the default currency.',
                'settings.company.description' => 'Change company name, email, address, RTN etc',
                'settings.company.search_keywords' => 'company, name, email, phone, address, country, RTN, tax number, logo, city, town, state, province, zip code',
            ],
            'es-ES' => [
                'general.tax_number' => 'RTN',
                'customers.form_description.billing' => 'El RTN aparece en cada factura que se emite al cliente. La moneda seleccionada se convierte en la moneda predeterminada para este cliente.',
                'vendors.form_description.billing' => 'El RTN aparece en cada factura que se le emite. La moneda seleccionada se convierte en la moneda predeterminada para este proveedor.',
                'companies.form_description.billing' => 'El RTN aparece en cada factura. El panel de informes y los reportes se muestran bajo la moneda predeterminada.',
                'settings.company.description' => 'Cambiar el nombre de la empresa, correo electrónico, dirección, RTN, etc',
                'settings.company.search_keywords' => 'empresa, nombre, correo electrónico, teléfono, dirección, país, RTN, identificación fiscal, logotipo, ciudad, pueblo, estado, provincia, código postal',
            ],
        ];

        // Apply overrides by directly modifying the loaded translations
        foreach ($overrides as $locale => $translations) {
            foreach ($translations as $key => $value) {
                $this->setNestedTranslation($translator, $locale, $key, $value);
            }
        }
    }

    protected function setNestedTranslation($translator, string $locale, string $key, string $value): void
    {
        // Parse the key to extract group and item
        // Format: "group.item" or "group.nested.item"
        $parts = explode('.', $key, 2);
        $group = $parts[0];
        $item = $parts[1] ?? null;

        if (!$item) {
            return;
        }

        // Access the loaded translations using reflection
        $reflection = new \ReflectionClass($translator);
        $loadedProperty = $reflection->getProperty('loaded');
        $loadedProperty->setAccessible(true);
        
        $loaded = $loadedProperty->getValue($translator);
        
        // Ensure the group is loaded first by calling get() which triggers loading
        // This is a hack to make sure the translations are loaded before we modify them
        $translator->get("{$group}.{$item}", [], $locale);
        
        // Refresh loaded after the get() call
        $loaded = $loadedProperty->getValue($translator);
        
        // Navigate to the nested location and set the value
        $itemParts = explode('.', $item);
        $current = &$loaded['*'][$group][$locale];
        
        foreach ($itemParts as $index => $part) {
            if ($index === count($itemParts) - 1) {
                // Last part, set the value
                $current[$part] = $value;
            } else {
                // Navigate deeper
                if (!isset($current[$part]) || !is_array($current[$part])) {
                    $current[$part] = [];
                }
                $current = &$current[$part];
            }
        }
        
        // Save the modified loaded array back
        $loadedProperty->setValue($translator, $loaded);
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
