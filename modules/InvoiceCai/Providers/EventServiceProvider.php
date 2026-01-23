<?php

namespace Modules\InvoiceCai\Providers;

use App\Events\Document\DocumentCreated;
use App\Events\Document\DocumentCreating;
use App\Events\Menu\SettingsCreated;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as Provider;
use Modules\InvoiceCai\Listeners\PersistInvoiceFiscalData;
use Modules\InvoiceCai\Listeners\SetInvoiceFiscalDefaults;
use Modules\InvoiceCai\Listeners\ShowInSettingsMenu;

class EventServiceProvider extends Provider
{
    protected $listen = [
        SettingsCreated::class => [
            ShowInSettingsMenu::class,
        ],
        DocumentCreating::class => [
            SetInvoiceFiscalDefaults::class,
        ],
        DocumentCreated::class => [
            PersistInvoiceFiscalData::class,
        ],
    ];

    public function boot(): void
    {
        parent::boot();
    }
}
