<div>
    <x-danger-button wire:click="$set('open', true)">CREAR NUEVO POST</x-danger-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen cargando!</strong>
                <span class="block sm:inline">Espere un momento mientras se carga la imagen.</span>
            </div>

            @if($image)
                <img src="{{ $image->temporaryUrl() }}" class="mb-4">
            @endif

            <div class="mt-4">
                <x-label for="title" value="{{ __('Title') }}" />
                <x-input id="title" class="block mt-1 w-full" type="text" wire:model.defer="title" />
                <x-input-error for="title" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="content" value="{{ __('Content') }}" />
                <textarea id="content" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" wire:model.defer="content"></textarea>
                <x-input-error for="content" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="image" value="{{ __('Image') }}" />
                <input type="file" id="{{ $identificador }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" wire:model.defer="image" />
                <x-input-error for="image" class="mt-2" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                {{ __('Save') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
