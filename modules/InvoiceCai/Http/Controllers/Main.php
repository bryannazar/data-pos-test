<?php

namespace Modules\InvoiceCai\Http\Controllers;

use App\Abstracts\Http\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function edit()
    {
        return view('invoice-cai::settings.fiscal');
    }

    public function update(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'cai'                   => 'nullable|string|max:255',
            'fecha_limite_emision'  => 'nullable|date',
            'rango_autorizado'      => 'nullable|string|max:255',
        ]);

        setting([
            'invoice.cai'                  => $validated['cai'] ?? '',
            'invoice.fecha_limite_emision' => $validated['fecha_limite_emision'] ?? '',
            'invoice.rango_autorizado'     => $validated['rango_autorizado'] ?? '',
        ])->save();

        $message = trans('messages.success.updated', ['type' => trans('invoice-cai::general.fiscal_data')]);

        flash($message)->success();

        return response()->json([
            'status'   => null,
            'success'  => true,
            'error'    => false,
            'message'  => $message,
            'data'     => null,
            'redirect' => url()->previous(),
        ]);
    }
}
