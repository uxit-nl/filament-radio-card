<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div class="mt-4 gap-y-6 sm:flex sm:justify-between sm:gap-x-4"
        style="display:grid; grid-template-columns: @for ($i = 0; $i < $getCardColumns() ; $i++) 1fr @endfor">
        @foreach ($getOptions() as $option)
            <div>
                <label
                    class="flex flex-1 flex-col basis-0 grow cursor-pointer rounded-lg border shadow-sm focus:outline-none border-2 h-full p-4"
                    style="@if ($getState() == $option['value']) border-color: {{ $getBorderColor() }}; @endif">
                    {{-- top of card, if an image is present --}}

                    @if (array_key_exists('image', $option))
                        <div class="">
                            <img src="{{ asset($option['image']) }}" alt="" class="p-1">
                        </div>
                    @endif
                    <span class="flex flex-1 justify-center">
                        <span class="flex flex-col">
                            <span id="project-type-0-label"
                                class="block text-md text-center font-medium text-gray-900 sm:h-auto md:h-20 lg:h-auto ">
                                {{ $option['title'] }}
                            </span>
                            @if (array_key_exists('description', $option))
                                <span id="project-type-0-description-0"
                                    class="mt-1 flex items-center text-sm text-gray-500 text-center px-6">
                                    {{ $option['description'] }}
                                </span>
                            @endif
                        </span>


                    </span>
                    <div class="flex justify-center">
                        <x-filament::badge color="success" icon="heroicon-s-cloud" icon-position="after">
                            100KG CO2
                        </x-filament::badge>
                    </div>
                    <input {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}" type="radio"
                        name="{{ $getId() }}" value="{{ $option['value'] }}" class="sr-only" />
                </label>
            </div>
        @endforeach
    </div>
</x-dynamic-component>
