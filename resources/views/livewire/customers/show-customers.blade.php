<div wire:init="loadPost">

    {{--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    --}}


    <div class="max w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-dark-2 dark:bg-dark-2 shadow-md mx-5 mt-5">

            <div class="px-2 py-2 sm:px-6 sm:py-4 flex flex-col sm:flex-row items-center">
                <div class="flex items-center mb-2 sm:mb-0 w-full sm:w-auto dark:text-slate-400">
                    <span class="mr-2 sm:mr-4">Mostrar</span>
                    <select wire:model="cant" class="dark:bg-dark-1 dark:border-dark-2 dark:shadow-dark-2 mx-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full sm:w-auto">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="hidden sm:inline">Entradas</span>
                </div>
                <x-input class="dark:bg-dark-1 dark:border-dark-2 dark:shadow-dark-2 dark:text-slate-300 flex-1 mb-2 sm:mx-4 sm:mb-0 w-full sm:w-auto" placeholder="Buscar..." type="text" wire:model="search" />
                @livewire('customers.create-customer')
            </div>


            <div class="overflow-x-auto">
                <table class="w-full border-collapse bg-white dark:bg-dark-2 text-left text-sm text-gray-500 table-auto">
                    <thead class="bg-gray-50 text-gray-900 dark:bg-dark-3 dark:text-slate-400">
                    <tr>
                        <th wire:click="order('id')"
                            scope="col" class="cursor-pointer px-6 py-4 font-medium ">
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
                        <th wire:click="order('email')"
                            scope="col" class="cursor-pointer px-6 py-4 font-medium">
                            CORREO ELECTRÓNICO

                            @if($sort == 'email')
                                @if($direction == 'asc')
                                    <i class="fas fa-sort-alpha-down"></i>
                                @else
                                    <i class="fas fa-sort-alpha-up"></i>
                                @endif
                            @else
                                <i class="fas fa-sort-alpha-down"></i>
                            @endif

                        </th>
                        <th wire:click="order('phone')"
                            scope="col" class="cursor-pointer px-6 py-4 font-medium">
                            TELÉFONO

                            @if($sort == 'phone')
                                @if($direction == 'asc')
                                    <i class="fas fa-sort-alpha-down"></i>
                                @else
                                    <i class="fas fa-sort-alpha-up"></i>
                                @endif
                            @else
                                <i class="fas fa-sort-alpha-down"></i>
                            @endif

                        </th>
                        <th wire:click="order('address')"
                            scope="col" class="cursor-pointer px-6 py-4 font-medium">
                            DIRECCIÓN

                            @if($sort == 'address')
                                @if($direction == 'asc')
                                    <i class="fas fa-sort-alpha-down"></i>
                                @else
                                    <i class="fas fa-sort-alpha-up"></i>
                                @endif
                            @else
                                <i class="fas fa-sort-alpha-down"></i>
                            @endif

                        </th>
                        <th wire:click="order('city')"
                            scope="col" class="cursor-pointer px-6 py-4 font-medium">
                            CIUDAD

                            @if($sort == 'city')
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
                    @if(count($customers))
                        @foreach($customers as $item)
                            <tr class="hover:bg-gray-50 dark:hover:bg-slate-900/40">
                                <td class="px-6 py-4">{{ $item->id }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('customer-details', $item->id) }}">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="px-6 py-4">{{ $item->email }}</td>
                                <td class="px-6 py-4">{{ $item->phone }}</td>
                                <td class="px-6 py-4">{{ $item->address }}</td>
                                <td class="px-6 py-4">{{ $item->city }}</td>
                                <td class="px-6 py-4 flex">

                                    <a class="px-3 py-2 bg-blue-500 rounded-lg text-white dark:bg-transparent border dark:border-blue-500/60 dark:text-blue-500/60 dark:hover:bg-blue-500/60 dark:hover:text-white hover:bg-blue-600" href="{{ route('customer-order', $item->id) }}">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>

                                    <a class="cursor-pointer px-3 py-2 bg-green-500 rounded-lg text-white mx-4 dark:bg-transparent border dark:border-green-500/60 dark:text-green-500/60 dark:hover:bg-green-500/60 dark:hover:text-white hover:bg-green-600" wire:click="edit({{$item}})">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a class="cursor-pointer px-3 py-2 bg-red-500 rounded-lg text-white dark:bg-transparent border dark:border-red-500/60 dark:text-red-500/60 dark:hover:bg-red-500/60 dark:hover:text-white hover:bg-red-600" wire:click="$emit('deleteCustomer', {{$item->id}})">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center">
                                <div class="bg-slate-100 dark:bg-slate-900/40 dark:text-white/60 px-2 py-1 rounded-lg w-full">
                                    <p>No hay registros</p>
                                </div>
                            </td>
                        </tr>
                    @endif


                    </tbody>
                </table>

            </div>

        </div>

        @if($customers->hasPages())
            <div class="px-6 py-4">
                {{ $customers->links() }}
            </div>
        @endif

    </div>


    <x-dialog-modal wire:model="open_edit">

        <x-slot name="trigger">
            <a href="#">
                <i class="fas fa-edit text-blue-500 cursor-pointer"></i>
            </a>
        </x-slot>

        <x-slot name="title">
            Editar cliente
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" wire:model="customer.name" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" name="name" placeholder="Jhon Doe" required autofocus />
                <x-input-error for="customer.name" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" wire:model="customer.email" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="email" placeholder="jhondoe@example.com" name="email" required />
                <x-input-error for="customer.email" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-label for="phone" :value="__('Phone')" />
                <x-input id="phone" wire:model="customer.phone" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2 appearance-none" type="number" placeholder="+528126734458" name="phone" required />
                <x-input-error for="customer.phone" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-label for="address" :value="__('Address')" />
                <x-input id="address" wire:model="customer.address" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="Ciudad, calle, c.p" name="address" required />
                <x-input-error for="customer.address" class="mt-2" />
            </div>

            <div class="mb-4">
                <x-label for="city" :value="__('City')" />
                <x-input id="city" wire:model="customer.city" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" name="city" required />
                <x-input-error for="customer.city" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button class="dark:bg-transparent dark:border-slate-400 dark:text-slate-400 dark:hover:bg-slate-400 dark:hover:text-slate-700" wire:click="$set('open_edit', false)">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button wire:click="update" wire:loading.attr="disabled" class="bg-orange-500 hover:bg-orange-600 dark:hover:bg-orange-400 dark:hover:text-white dark:text-orange-400 dark:bg-transparent dark:border-orange-400 disabled:opacity-25 ml-4">
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
                    confirmButtonText: 'Eliminar',
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
