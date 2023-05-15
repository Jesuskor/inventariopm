<div>
    <x-button class="bg-orange-500 hover:bg-orange-600 active:bg-orange-600 focus:bg-gray-600 dark:bg-transparent dark:border-orange-500/80 dark:text-orange-500/80 dark:hover:bg-orange-500/80 dark:hover:text-white/80" wire:click="$set('open', true)">CREAR NUEVO CLIENTE</x-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo cliente
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="Jhon Doe" wire:model.defer="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="jhondoe@example.com" wire:model.defer="email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="+520000000000" wire:model.defer="phone" />
                <x-input-error for="phone" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="Jicamas #1000" wire:model.defer="address" />
                <x-input-error for="address" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="city" value="{{ __('City') }}" />
                <x-input id="city" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="Monterrey" wire:model.defer="city" />
                <x-input-error for="city" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="mr-1 dark:bg-transparent dark:border-slate-400 dark:text-slate-400 dark:hover:bg-slate-400 dark:hover:text-slate-700" wire:click="$set('open', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-2 bg-orange-500 dark:hover:bg-orange-400 dark:hover:text-white dark:text-orange-400 dark:bg-transparent dark:border-orange-400 hover:bg-orange-600 disabled:opacity-25" wire:click="save" wire:loading.attr="disabled" wire:target="save">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
