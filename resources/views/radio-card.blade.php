<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        class="flex flex-col gap-y-2"
        x-data="{ card: '' }"
    >
        @foreach ($getOptions() as $option)
            <label
                :style="{
                    'border-color': card === '{{ $option['value'] }}' ?
                        '{{ $getBorderColors()['selected'] }}' : '{{ $getBorderColors()['default'] }}',
                }"
                class="cursor-pointer rounded-xl border-2 shadow-sm  p-4"
            >
                @include($getContentView(), ['option' => $option])
                <input
                    type="radio"
                    class="sr-only"
                    {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                    x-model="card"
                    value="{{ $option['value'] }}"
                />
            </label>
        @endforeach
    </div>
</x-dynamic-component>
