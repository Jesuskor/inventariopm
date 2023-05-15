<div wire:init="loadPost">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-slate-300">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="max w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md mt-5 mx-5 dark:border-dark-2 dark:shadow-dark-2">

            <div class="px-6 py-4 flex items-center">

                <div class="flex items-center dark:text-slate-400">
                    <span>Mostrar</span>
                    <select wire:model="cant" class="dark:bg-dark-3 dark:border-dark-2 dark:shadow-dark-2 mx-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm flex-1">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entradas</span>
                </div>

                <x-input class="dark:bg-dark-3 dark:border-dark-2 dark:shadow-dark-2 dark:text-slate-300 flex-1 mx-4" placeholder="Buscar..." type="text" wire:model="search" />
                {{-- @livewire('products.create-product') --}}
                <a class="bg-orange-500 hover:bg-orange-600 active:bg-orange-600 focus:bg-gray-600 dark:bg-transparent dark:border-orange-500/80 dark:text-orange-500/80 dark:hover:bg-orange-500/80 dark:hover:text-white/80 rounded-lg p-2 text-white text-sm px-3 dark:border dark:border-orange-500/80" href="{{ route('products.create-product') }}">CREAR PRODUCTO</a>
            </div>

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 dark:bg-dark-2">
                <thead class="bg-gray-50 dark:bg-dark-3 dark:text-slate-400">
                <tr>
                    <th wire:click="order('id')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium">
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
                    <th wire:click="order('name')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium">
                        NOMBRE

                        @if($sort == 'name')
                            @if($direction == 'asc')
                                <i class="fas fa-sort-alpha-down"></i>
                            @else
                                <i class="fas fa-sort-alpha-up"></i>
                            @endif
                        @else
                            <i class="fas fa-sort-alpha-down"></i>
                        @endif

                    </th>
                    <th scope="col" class="px-6 py-4 font-medium"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100 dark:border-dark-2 dark:divide-slate-700">
                @if(count($products))
                    @foreach($products as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-slate-900/40">
                            <td class="px-6 py-4">{{ $item->id }}</td>
                            <td class="px-6 py-4">{{ $item->name }}</td>
                            <td class="px-6 py-4 flex float-right">
                                <a class="cursor-pointer px-3 py-2 bg-green-500 rounded-lg text-white mx-4 dark:bg-transparent border dark:border-green-500/60 dark:text-green-500/60 dark:hover:bg-green-500/60 dark:hover:text-white hover:bg-green-600" {{--wire:click="edit({{$item}})--}}>
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a class="cursor-pointer px-3 py-2 bg-red-500 rounded-lg text-white dark:bg-transparent border dark:border-red-500/60 dark:text-red-500/60 dark:hover:bg-red-500/60 dark:hover:text-white hover:bg-red-600" {{--wire:click="$emit('deleteCategory', {{$item->id}})--}}>
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @if($products->hasPages())
                        <div class="px-6 py-4">
                            {{ $products->links() }}
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
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" wire:model="category.name" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" placeholder="Nombre de la categoría" type="text" name="name" required autofocus />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="mr-1 dark:bg-transparent dark:border-slate-400 dark:text-slate-400 dark:hover:bg-slate-400 dark:hover:text-slate-700" wire:click="$set('open_edit', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button wire:click="update" wire:loading.attr="disabled" class="bg-orange-500 hover:bg-orange-600 dark:hover:bg-orange-400 dark:hover:text-white dark:text-orange-400 dark:bg-transparent dark:border-orange-400 disabled:opacity-25">
                {{ __('Actualizar') }}
            </x-button>
        </x-slot>

    </x-dialog-modal>

    @push('js')
        <script>
            Livewire.on('deleteCategory', categoryId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#ccc',
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('categories.show-categories', 'delete', categoryId)
                        Swal.fire(
                            '¡Borrado!',
                            'El cliente ha sido borrado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush

</div>
