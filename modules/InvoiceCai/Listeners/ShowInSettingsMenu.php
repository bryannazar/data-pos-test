<?php

namespace Modules\InvoiceCai\Listeners;

use App\Events\Menu\SettingsCreated as Event;
use App\Traits\Modules;
use App\Traits\Permissions;

class ShowInSettingsMenu
{
    use Modules, Permissions;

    public function handle(Event $event): void
    {
        if (! $this->moduleIsEnabled('invoice-cai')) {
            return;
        }

        $title = trans('invoice-cai::general.fiscal_data');

        if ($this->canAccessMenuItem($title, 'read-settings-invoice')) {
            $event->menu->route(
                'settings.invoices.fiscal.edit',
                $title,
                [],
                31,
                [
                    'icon'           => 'receipt_long',
                    'search_keywords' => trans('invoice-cai::general.description'),
                ]
            );
        }
    }
}
