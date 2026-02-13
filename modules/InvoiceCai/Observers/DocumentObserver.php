<?php

namespace Modules\InvoiceCai\Observers;

use App\Models\Document\Document;

class DocumentObserver
{
    public function retrieved(Document $document): void
    {
        if ($document->type === 'invoice') {
            $document->setAttribute('cai', $document->getAttributes()['cai'] ?? null);
            $document->setAttribute('fecha_limite_emision', $document->getAttributes()['fecha_limite_emision'] ?? null);
            $document->setAttribute('rango_autorizado', $document->getAttributes()['rango_autorizado'] ?? null);
            
            if (! in_array('cai', $document->getAppends())) {
                $document->append(['cai', 'fecha_limite_emision', 'rango_autorizado']);
            }
        }
    }
}
