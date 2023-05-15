<div wire:init="loadPost">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">

            <div class="px-6 py-4 flex items-center">

                <div class="flex items-center">
                    <span>Mostrar</span>
                    <select wire:model="cant" class="mx-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm flex-1">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>entradas</span>
                </div>

                <x-input class="flex-1 mx-4" placeholder="Buscar..." type="text" wire:model="search" />
                @livewire('create-post')
            </div>

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>
                    <th wire:click="order('id')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900">
                        ID

                        @if($sort == 'id')
                            @if($direction == 'asc')
                                <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="fas fa-sort-alpha-down"></i>
                        @endif


                    </th>
                    <th wire:click="order('title')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900">
                        TITLE

                        @if($sort == 'title')
                            @if($direction == 'asc')
                                <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="fas fa-sort-alpha-down"></i>
                        @endif

                    </th>
                    <th wire:click="order('content')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900">
                        CONTENT

                        @if($sort == 'content')
                            @if($direction == 'asc')
                                <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="fas fa-sort-alpha-down"></i>
                        @endif

                    </th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @if(count($posts))
                        @foreach($posts as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $item->id }}</td>
                                <td class="px-6 py-4">{{ $item->title }}</td>
                                <td class="px-6 py-4">{{ $item->content }}</td>
                                <td class="px-6 py-4 flex">
                                    <a class="px-3 py-2 bg-green-500 rounded-lg text-white" wire:click="edit({{$item}})">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a class="px-3 py-2 bg-red-500 rounded-lg text-white mx-4" wire:click="$emit('deletePost', {{$item->id}})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @if($posts->hasPages())
                            <div class="px-6 py-4">
                                {{ $posts->links() }}
                            </div>
                        @endif

                    @else
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center">
                                <div class="bg-slate-100 px-2 py-1 rounded-lg w-full">
                                    <p>No hay registros</p>
                                </div>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>

        </div>

    </div>


    <x-dialog-modal wire:model="open_edit">

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
            <x-secondary-button wire:click="$set('open_edit', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25 ml-4">
                {{ __('Actualizar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>

     @push('js')
         <script>
            Livewire.on('deletePost', postId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '¡Sí, bórralo!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('show-posts', 'delete', postId)
                        Swal.fire(
                            '¡Borrado!',
                            'El post ha sido borrado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</div>
