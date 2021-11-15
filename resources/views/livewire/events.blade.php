<x-jet-form-section submit="dispatchEvent">
    <x-slot name="title">
        {{ __('Events') }}
    </x-slot>

    <x-slot name="description">
        Test out a event/listner using the queue.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
            Dispatch a test event.
        </div>
        <div class="col-span-6">
            @if($events->count())
                @foreach($events as $event)
                    <div class="mt-3 flex space-x-10">
                        <span class="font-semibold text-green-400">New Event: </span>
                        <span class="text-gray-500">{{ $event->random }}</span>
                        <span class="text-indigo-500">{{ \Illuminate\Support\Carbon::parse($event->created_at)->toFormattedDateString() }}</span>
                    </div>
                @endforeach
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="dispatched">
            {{ __('Dispatched.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Dispatch Event') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>