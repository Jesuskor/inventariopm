<div>
    <x-button class="bg-orange-500 hover:bg-orange-600 active:bg-orange-600 focus:bg-gray-600 dark:bg-transparent dark:border-orange-500/80 dark:text-orange-500/80 dark:hover:bg-orange-500/80 dark:hover:text-white/80" wire:click="$set('open', true)">CREAR NUEVA CATEGORÍA</x-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nueva categoría
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" placeholder="Nombre de la categoría" type="text" wire:model.defer="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="mr-1 dark:bg-transparent dark:border-slate-400 dark:text-slate-400 dark:hover:bg-slate-400 dark:hover:text-slate-700" wire:click="$set('open', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="save" wire:loading.attr="disabled" wire:target="save" class="bg-orange-500 dark:hover:bg-orange-400 dark:hover:text-white dark:text-orange-400 dark:bg-transparent dark:border-orange-400 disabled:opacity-25">
                {{ __('Save') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
