<x-jet-action-section>
    <x-slot name="title">
        {{ __('Configuration') }}
    </x-slot>

    <x-slot name="description">
    </x-slot>

    <x-slot name="content">
        <code class="block whitespace-pre text-sm">
            {{ json_encode(config()->all(), JSON_PRETTY_PRINT)  }}
        </code>
    </x-slot>
</x-jet-action-section>