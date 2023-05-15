<div wire:init="loadPost">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
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
                {{-- @livewire('customers.create-customer') --}}
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
                    <th wire:click="order('name')"
                        scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900">
                        ID CUSTOMER

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
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @if(count($sales))
                    @foreach($sales as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $item->id }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('customer-details', $item->customer_id) }}">
                                    {{ $item->customer->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4 flex">
                                <a href="{{ route('sale-details', $item->id) }}" class="px-3 py-2 bg-green-500 rounded-lg text-white">
                                    Ver detalles
                                </a>

                                <a class="px-3 py-2 bg-red-500 rounded-lg text-white mx-4" wire:click="$emit('deleteCustomer', {{$item->id}})">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    @if($sales->hasPages())
                        <div class="px-6 py-4">
                            {{ $sales->links() }}
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
            Edit Customer
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" wire:model="customer.name" class="block mt-1 w-full" type="text" name="name" required autofocus />
            </div>

            <div class="mb-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" wire:model="customer.email" class="block mt-1 w-full" type="email" name="email" required />
            </div>

            <div class="mb-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" wire:model="customer.phone" class="block mt-1 w-full" type="text" name="phone" required />
            </div>

            <div class="mb-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" wire:model="customer.address" class="block mt-1 w-full" type="text" name="address" required />
            </div>

            <div class="mb-4">
                <x-label for="city" :value="__('City')" />

                <x-input id="city" wire:model="customer.city" class="block mt-1 w-full" type="text" name="city" required />
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
            Livewire.on('deleteCustomer', customerId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#ccc',
                    confirmButtonText: '¡Sí, bórralo!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('customers.show-customers', 'delete', customerId)
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
