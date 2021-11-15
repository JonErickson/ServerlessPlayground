<x-jet-form-section submit="sendEmail">
    <x-slot name="title">
        {{ __('Mail') }}
    </x-slot>

    <x-slot name="description">
        Send a test email.
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="text" class="mt-1 block w-full" wire:model.defer="email" autofocus />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="message" value="{{ __('Message') }}" />
            <x-jet-input id="message" type="text" class="mt-1 block w-full" wire:model.defer="message" />
            <x-jet-input-error for="message" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="sent">
            {{ __('Sent.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Send Email') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>