<div class="p-6">

    <div class="lg:flex">
        <div class="sm:w-12/12 md:w-12/12 lg:w-8/12 p-2">
            <div class="bg-white dark:bg-dark-2 shadow-app p-4 rounded-lg w-full mb-6">
                @if(!$categoryInfo)
                    <input type="text" wire:model="search" class="bg-slate-300 dark:text-slate-300 dark:bg-dark-3 w-full rounded-lg border border-none mb-8" placeholder="Buscar categoría...">
                    <div class="flex overflow-x-auto snap-x snap-mandatory">
                        @foreach($categories as $category)
                            <div class="mx-4 flex-none cursor-pointer hover:bg-orange-500/20 dark:hover:bg-slate-400/10 rounded-lg p-3" wire:click="selectCategory({{ $category->id }})">
                                <div class="bg-slate-300 rounded-full w-12 h-12 mx-auto"></div>
                                <div class="text-center text-slate-600">{{ $category->name }}</div>
                            </div>
                        @endforeach
                    </div>
                    <x-input-error for="category_id" class="mt-2" />
                @else
                    <div class="flex w-full">
                        <div class="text-slate-700 dark:text-slate-400 flex">
                            <div class="mr-1">Categoría seleccionada:</div>
                            <div class="font-semibold">{{ $selectedCategory->name }}</div>
                        </div>

                        <div wire:click="removeCategory" class="bg-red-500 rounded-full w-6 h-6 flex items-center justify-center text-white ml-auto cursor-pointer">x</div>
                    </div>
                @endif
            </div>

            <div class="w-full bg-white dark:bg-dark-2 p-4 rounded-lg">
                <div class="flex items-center space-x-6">
                    <div class="shrink-0">
                        @if($image)
                            <img src="{{ $image->temporaryUrl() }}" class="h-16 w-16 object-cover rounded-full">
                        @else
                            <div class="h-16 w-16 object-cover rounded-full bg-orange-400 dark:bg-orange-400/70"></div>
                        @endif
                    </div>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input wire:model="image" type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100"/>
                        <x-input-error for="image" class="mt-2" />
                    </label>
                </div>
            </div>

            <div class="w-full bg-white dark:bg-dark-2 p-4 rounded-lg mt-6 dark:text-slate-300">
                <div class="mb-6">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" wire:model="name" class="block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="text" placeholder="Nombre del producto" name="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="mb-6">
                    <x-label for="description" :value="__('Description')" />
                    <textarea id="description" wire:model="description" class="dark:text-slate-300 block mt-1 w-full dark:bg-dark-3 dark:border-dark-2 rounded-lg border border-gray-300 shadow-sm" type="text" placeholder="Descripción del producto" name="description"></textarea>
                    <x-input-error for="description" class="mt-2" />
                </div class="mb-6">

                <div class="mb-6">
                    <x-label for="price" :value="__('Price')" />
                    <x-input id="price" wire:model="price" class="dark:text-slate-300 block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="number" placeholder="0.00" name="price" />
                    <x-input-error for="price" class="mt-2" />
                </div>

                <div class="mb-6">
                    <x-label for="stock" :value="__('Stock')" />
                    <x-input id="stock" wire:model="stock" class="dark:text-slate-300 block mt-1 w-full dark:bg-dark-3 dark:border-dark-2" type="number" placeholder="0" name="stock" />
                    <x-input-error for="stock" class="mt-2" />
                </div>

            </div>

            <div wire:click="save" class="bg-orange-400 hover:bg-orange-500 dark:bg-transparent dark:border dark:border-orange-400 dark:hover:bg-orange-400 duration-100 font-semibold text-white cursor-pointer text-center w-full my-4 p-3 rounded-lg">Guardar</div>

        </div>

        <div class="sm:w-12/12 md:w-12/12 lg:w-4/12 p-2">
            <div class="w-full bg-red-500 text-white text-center p-2 rounded-lg">Vista previa</div>
        </div>
    </div>

</div>
