<x-jet-action-section>
    <x-slot name="title">
        {{ __('Environment Variables') }}
    </x-slot>

    <x-slot name="description">
        A list of environment variables that have been set for the application.
    </x-slot>

    <x-slot name="content">
        <dl>
            @php
                $counter = 0;
            @endphp
            @foreach(collect($_ENV)->sortKeys()->all() as $key => $value)
                @php
                    $counter++;
                @endphp
                <div class="@if($counter % 2 === 0) bg-gray-100 @else bg-white @endif px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-6 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500 overflow-hidden">
                        {{ $key }}
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 overflow-hidden">
                        {{ $value }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </x-slot>
</x-jet-action-section>