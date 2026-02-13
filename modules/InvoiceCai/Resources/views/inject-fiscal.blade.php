@if(isset($document) && $document->type === 'invoice')
    @push('due_at_input_end')
        @if ($document->cai)
            <p class="mb-0">
                <span class="font-semibold spacing w-numbers">
                    {{ trans('invoice-cai::general.cai') }}:
                </span>

                <span class="float-right spacing">
                    {{ $document->cai }}
                </span>
            </p>
        @endif

        @if ($document->fecha_limite_emision)
            <p class="mb-0">
                <span class="font-semibold spacing w-numbers">
                    {{ trans('invoice-cai::general.fecha_limite_emision') }}:
                </span>

                <span class="float-right spacing">
                    @date($document->fecha_limite_emision)
                </span>
            </p>
        @endif

        @if ($document->rango_autorizado)
            <p class="mb-0">
                <span class="font-semibold spacing w-numbers">
                    {{ trans('invoice-cai::general.rango_autorizado') }}:
                </span>

                <span class="float-right spacing">
                    {{ $document->rango_autorizado }}
                </span>
            </p>
        @endif
    @endpush
@endif
