<x-layouts.admin>
    <x-slot name="title">{{ trans('invoice-cai::general.fiscal_data') }}</x-slot>

    <x-slot name="content">
        <x-form.container>
            <x-form id="setting" method="PATCH" route="settings.invoices.fiscal.update">
                <x-form.section>
                    <x-slot name="head">
                        <x-form.section.head title="{{ trans('invoice-cai::general.fiscal_data') }}" description="{{ trans('invoice-cai::general.fiscal_data_description') }}" />
                    </x-slot>

                    <x-slot name="body">
                        <x-form.group.text
                            name="cai"
                            label="{{ trans('invoice-cai::general.cai') }}"
                            value="{{ setting('invoice.cai') }}"
                            not-required
                        />

                        <x-form.group.date
                            name="fecha_limite_emision"
                            label="{{ trans('invoice-cai::general.fecha_limite_emision') }}"
                            icon="calendar_today"
                            value="{{ setting('invoice.fecha_limite_emision') }}"
                            show-date-format="{{ company_date_format() }}"
                            date-format="Y-m-d"
                            autocomplete="off"
                            not-required
                        />

                        <x-form.group.text
                            name="rango_autorizado"
                            label="{{ trans('invoice-cai::general.rango_autorizado') }}"
                            value="{{ setting('invoice.rango_autorizado') }}"
                            not-required
                        />
                    </x-slot>
                </x-form.section>

                @can('update-settings-invoice')
                <x-form.section>
                    <x-slot name="foot">
                        <x-form.buttons :cancel="url()->previous()" />
                    </x-slot>
                </x-form.section>
                @endcan
            </x-form>
        </x-form.container>
    </x-slot>

    <x-script folder="settings" file="settings" />
</x-layouts.admin>
