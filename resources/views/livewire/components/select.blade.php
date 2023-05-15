<div class="w-full sm:w-3/12 lg:w-3/12 bg-gray-300">

    <div class="my-3">
        <label class="inline-block">
            <span class="text-gray-700">Categorías</span>
            <select
                id="category"
                wire:model="selectedCategoryId"
                wire:change="getProductsByCategoryId"
                class="block w-full mt-1 rounded-md border-transparent select2">
                <option value="">Seleccionar categoría...</option>
                @forelse ($categories as $category)
                    <option value="{{ $category['id']}}">{{ $category['name'] }}</option>
                @empty

                @endforelse
            </select>
        </label>
    </div>

    <div>
        <label class="inline-block">
            <span class="text-gray-700">Productos</span>
            <select
                id="product"
                wire:model="selectedProductId"
                class="block w-full mt-1 rounded-md border-transparent select2">
                <option value="">Seleccionar producto...</option>
                @forelse ($products as $product)
                    <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
                @empty

                @endforelse
            </select>
        </label>
    </div>

</div>
