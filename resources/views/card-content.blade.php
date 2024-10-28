<div class="">
    @if (array_key_exists('emission', $option))
        <div
            :style="{
                'background-color': card === '{{ $option['value'] }}' ?
                    '{{ $getBorderColors()['selected'] }}' : '{{ $getBorderColors()['default'] }}',
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

    <div class="flex flex-col gap-y-2">
        {{-- <div class="flex flex-col"> --}}
        @if (array_key_exists('title', $option))
            <h1 class="text-lg block font-medium text-gray-900">
                {{ $option['title'] }}
            </h1>
        @endif
        @if (array_key_exists('description', $option))
            <h2 class="block items-center text-sm text-gray-500">
                {{ $option['description'] }}
            </h2>
        @endif

        <div class="flex flex-start gap-x-2">
            @if (array_key_exists('price', $option))
                <x-filament::badge
                    icon="heroicon-o-currency-euro"
                    color="success"
                >
                    {{ $option['price'] }}
                </x-filament::badge>
            @endif

            @if (array_key_exists('co2', $option))
                <x-filament::badge
                    icon="heroicon-o-cloud"
                    color="gray"
                >
                    {{ $option['co2'] }}
                </x-filament::badge>
            @endif
        </div>
    </div>



</div>
