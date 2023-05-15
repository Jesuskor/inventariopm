<div>
    <a href="#" wire:click="$set('open', true)">
        <i class="fas fa-edit text-blue-500 cursor-pointer"></i>
    </a>

    <x-dialog-modal wire:model="open">

        <x-slot name="trigger">
            <a href="#">
                <i class="fas fa-edit text-blue-500 cursor-pointer"></i>
            </a>
        </x-slot>

        <x-slot name="title">
            Edit Post
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Imagen cargando!</strong>
                <span class="block sm:inline">Espere un momento mientras se carga la imagen.</span>
            </div>

            @if($image)
                <img src="{{ $image->temporaryUrl() }}" class="mb-4">
            @else
                <img src="{{ Storage::url($post->image) }}" class="mb-4">
            @endif

            <div class="mb-4">
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" wire:model="post.title" class="block mt-1 w-full" type="text" name="title" required autofocus />
            </div>

            <div class="mb-4">
                <x-label for="content" :value="__('Content')" />

                <textarea wire:model="post.content" id="content" rows="6" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="content" required></textarea>
            </div>

            <div class="mb-4">
                <x-label for="image" :value="__('Image')" />

                <input type="file" wire:model="image" id="{{ $identificador }}" class="block mt-1 w-full" name="image" required />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25 ml-4">
                {{ __('Actualizar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
