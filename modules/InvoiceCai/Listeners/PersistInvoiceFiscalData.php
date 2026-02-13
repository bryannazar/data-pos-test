<?php

namespace Modules\InvoiceCai\Listeners;

use App\Events\Document\DocumentCreated;
use Illuminate\Support\Facades\DB;

class PersistInvoiceFiscalData
{
    public function handle(DocumentCreated $event): void
    {
        $document = $event->document;
        $request  = $event->request;

        if ($document->type !== 'invoice') {
            return;
        }

        $updates = array_filter([
            'cai'                   => $request->get('cai'),
            'fecha_limite_emision' => $request->get('fecha_limite_emision'),
            'rango_autorizado'     => $request->get('rango_autorizado'),
        ], fn ($v) => $v !== null && $v !== '');

        if ($updates === []) {
            return;
        }

        DB::table('documents')
            ->where('id', $document->id)
            ->update($updates);
    }
}
