<?php

namespace Modules\InvoiceCai\Listeners;

use App\Events\Document\DocumentCreating;

class SetInvoiceFiscalDefaults
{
    public function handle(DocumentCreating $event): void
    {
        $request = $event->request;

        if (($request->get('type') ?? '') !== 'invoice') {
            return;
        }

        $merge = [];

        if (empty($request->get('cai'))) {
            $merge['cai'] = setting('invoice.cai', '');
        }

        if (empty($request->get('fecha_limite_emision'))) {
            $merge['fecha_limite_emision'] = setting('invoice.fecha_limite_emision', '');
        }

        if (empty($request->get('rango_autorizado'))) {
            $merge['rango_autorizado'] = setting('invoice.rango_autorizado', '');
        }

        if ($merge !== []) {
            $request->merge($merge);
        }
    }
}
