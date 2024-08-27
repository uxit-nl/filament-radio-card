<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        class="grid flex-wrap gap-x-5 gap-y-5 "
        style="grid-template-columns: repeat({{ $getCardColumns() }}, 1fr)"
        x-data="{ card: '' }"
    >
        @foreach ($getOptions() as $option)
            @php
                $isElectric = false;
                if (array_key_exists('isElectric', $option) && $option['isElectric'] === true) {
                    $isElectric = true;
                }
            @endphp
            <label
                :style="{
                    'border-color': card === '{{ $option['value'] }}' ? '{{ $getBorderColors()['selected'] }}' :
                        '{{ $getBorderColors()['default'] }}'
                }"
                class="relative grid-rows-subgrid box-content grid cursor-pointer rounded-xl border-4 p-10 shadow-sm "
                @style(['grid-row: span ' . $getRowSpan() . ' / span ' . $getRowSpan(), 'background-image:linear-gradient(0deg, rgba(22,183,55,0.2931766456582633) 0%, rgba(255,255,255,0) 43%);' => $isElectric])
            >
                {{-- <div class="lg:flex lg:flex-1 lg:items-center lg:gap-10"> --}}
                @if (array_key_exists('emission', $option))
                    <div
                        :style="{
                            'background-color': card === '{{ $option['value'] }}' ?
                                '{{ $getBorderColors()['selected'] }}' : '{{ $getBorderColors()['default'] }}',
                            'color': card === '{{ $option['value'] }}' ?
                                'white' : 'black'
                        }"
                        class="absolute top-0 flex gap-2 justify-center items-center left-1/2 w-56 p-3 z-10 text-center rounded-b-xl  -translate-x-1/2"
                    >
                        <x-heroicon-s-cloud class="h-4" />{{ $option['emission'] }} kg CO2
                    </div>
                @endif
                @if (array_key_exists('image', $option))
                    <div class="p-1 lg:w-1/2 mx-auto">
                        <img
                            src="{{ asset($option['image']) }}"
                            alt="{{ $option['title'] }}"
                        >
                    </div>
                @endif
                <div>
                    <span class="flex justify-center">
                        <span class="flex flex-col">
                            <span class="text-lg block font-medium text-gray-900">
                                {{ $option['title'] }}
                            </span>
                            @if (array_key_exists('description', $option))
                                <span class="mt-4 flex items-center text-sm text-gray-500">
                                    {{ $option['description'] }}
                                </span>
                            @endif
                        </span>
                    </span>
                </div>
                {{-- </div> --}}
                @if (array_key_exists('price', $option))
                    <div class="flex items-center justify-center gap-3">
                        <x-filament::badge
                            color="success"
                            icon="heroicon-s-currency-euro"
                            icon-position="before"
                        >
                            {{ $option['price'] }}
                        </x-filament::badge>
                    </div>
                @endif
                <div class="flex justify-center">
                    <input
                        type="radio"
                        class="sr-only"
                        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                        x-model="card"
                        value="{{ $option['value'] }}"
                    />
                </div>
            </label>
        @endforeach
    </div>
</x-dynamic-component>
