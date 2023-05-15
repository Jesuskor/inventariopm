<div>

    <div class="flex flex-wrap">

        {{-- Primer columna --}}
        <div class="w-full sm:w-3/12 lg:w-3/12 p-4">

            <div class="animate__animated animate__bounceInLeft bg-slate-500 shadow-app dark:bg-transparent dark:border dark:border-slate-400/70 dark:text-slate-400/70 p-2 rounded-lg text-center mb-4 text-white">Información del cliente</div>

            <div>
                <button class="animate__animated animate__bounceInLeft bg-white dark:bg-dark-3 p-2 rounded-lg shadow-app flex items-center w-full" wire:click="toggle">
                    <div class="bg-slate-400 w-12 h-12 rounded-full overflow-hidden">
                        <img class="object-cover object-center w-full h-12" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="avatar">
                    </div>
                    <div class="px-2 flex-1">
                        <p class="font-semibold text-left text-slate-700 dark:text-slate-300">
                            {{ $customer->name }}
                        </p>
                    </div>
                    <div class="dark:bg-dark-1 h-6 w-6 rounded-full float-right p-1 text-slate-300 text-sm">
                        @if($isOpen)
                            <i class="fa-solid fa-angle-up"></i>
                        @else
                            <i class="fa-solid fa-angle-down"></i>
                        @endif
                    </div>
                </button>

                @if ($isOpen)
                    <div class="flex-none">
                        <div class="bg-white p-2 rounded-br-lg rounded-bl-lg -mt-1 mb-4 shadow-app flex items-center w-full">
                            <div class="px-2">
                                <p class="py-2 text-gray-700 dark:text-gray-400">
                                    <b>Cliente desde:</b> {{ $customer->created_at->locale('es')->diffForHumans() }}
                                </p>

                                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg aria-label="phone icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.5 21H6.5C5.67157 21 5 20.3284 5 19.5V4.5C5 3.67157 5.67157 3 6.5 3H17.5C18.3284 3 19 3.67157 19 4.5V19.5C19 20.3284 18.3284 21 17.5 21ZM7.5 5.5V18.5H16.5V5.5H7.5ZM10.5 20H13.5V20.5C13.5 20.7761 13.2761 21 13 21H11C10.7239 21 10.5 20.7761 10.5 20.5V20ZM16 17.5C16.8284 17.5 17.5 16.8284 17.5 16C17.5 15.1716 16.8284 14.5 16 14.5C15.1716 14.5 14.5 15.1716 14.5 16C14.5 16.8284 15.1716 17.5 16 17.5ZM8 16C8 14.8954 8.89543 14 10 14C11.1046 14 12 14.8954 12 16C12 17.1046 11.1046 18 10 18C8.89543 18 8 17.1046 8 16Z"/>
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $customer->phone }}</h1>
                                </div>

                                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg aria-label="location pin icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z"/>
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $customer->address }}</h1>
                                </div>

                                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg aria-label="email icon" class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z"/>
                                    </svg>
                                    <h1 class="px-2 text-sm">{{ $customer->email }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>


            <div class="animate__animated animate__bounceInLeft bg-orange-500/60 dark:bg-transparent dark:border dark:border-orange-500/60 dark:text-orange-500/60 p-2 rounded-lg text-center mb-4 mt-8 text-white">Categoría</div>

            <div class="mb-6 animate__animated animate__bounceInLeft">
                <select
                    id="category"
                    wire:model="selectedCategoryId"
                    wire:change="getProductsByCategoryId"
                    wire:ignore
                    class="block w-full mt-1 rounded-md border-transparent select2">
                    <option value="" selected>Seleccionar categoría...</option>
                    @forelse ($categories as $category)
                        <option value="{{ $category['id']}}">{{ $category['name'] }}</option>
                    @empty

                    @endforelse
                </select>
            </div>

        </div>

        {{-- Segunda columna --}}
        <div class="w-full sm:w-5/12 lg:w-5/12 p-4">
            <div>
                <div class="animate__animated animate__bounceInDown bg-orange-500/70 dark:bg-transparent dark:border dark:border-orange-500/70 dark:text-orange-500/70 p-2 rounded-lg text-center mb-2 text-white">Lista de productos</div>
                <div>
                    @if ($errors->any())
                        <div class="animate__animated animate__fadeInDown p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-400/20 dark:bg-red-100 dark:text-red-400">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500"><b>Oops! </b>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="grid max-h-96 overflow-y-scroll px-2 pt-2 pb-4">
                    @foreach ($products as $product)
                        <ul class="flex flex-col divide-y divide-gray-700">
                            <li class="animate__animated animate__fadeInLeft flex flex-col sm:flex-row sm:justify-between bg-white dark:bg-dark-3 rounded-lg p-3 mb-3 shadow-app hover:shadow-lg transition duration-150">
                                <div class="flex w-full">
                                    @if($product['image'])
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="{{ asset('storage/'. $product['image']) }}" alt="Polaroid camera">
                                    @else
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="Polaroid camera">
                                    @endif
                                    <div class="flex flex-col justify-between w-full ml-2 p-2">
                                        <div class="flex justify-between w-full pb-2 space-x-2">
                                            <div class="space-y-1">
                                                <h3 class="text-lg font-semibold leading-snug sm:pr-8 dark:text-slate-400">{{ $product['name'] }}</h3>
                                                <p class="text-sm dark:text-slate-300">
                                                    @if($product['stock'] < 0 || $product['stock'] == 0)
                                                        0 unidades disponibles
                                                    @elseif($this->quantity[$product['id']] == '')
                                                        {{ $product['stock'] - 0 }} unidades disponibles
                                                    @elseif($this->quantity[$product['id']] > $product['stock'])
                                                    <div class="text-red-500 text-sm">Te faltan {{ ($product['stock'] - $this->quantity[$product['id']])*-1 }} unidades disponibles</div>
                                                    @else
                                                    {{ $product['stock'] - $this->quantity[$product['id']] }} unidades disponibles
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-lg font-semibold dark:text-slate-200">
                                                    ${{ $product['price'] }}</p>
                                            </div>
                                        </div>
                                        <div class="flex text-sm divide-x">
                                            <div>
                                                <input type="number" placeholder="0" class="rounded-lg border-none bg-gray-100 dark:bg-dark-2 dark:text-slate-400" min="0" max="{{ $product['stock'] }}" wire:model="quantity.{{ $product['id'] }}" wire:key="{{ $product['id'] }}" value="0">
                                            </div>
                                            <button wire:click="addToSelectedProducts({{ $product['id'] }})" type="button" class="flex items-center px-2 py-1 space-x-1 ml-auto dark:text-slate-100">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current">
                                                    <path d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z"></path>
                                                </svg>
                                                <span>Agregar a la lista</span>
                                            </button>
                                        </div>
                                        @error('quantity_' . $product['id'])
                                        <span class="bg-red-500 p-2 rounded-lg mt-2 text-white text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Tercera columna --}}
        <div class="w-full sm:w-4/12 lg:w-4/12 text-slate-800 dark:text-slate-300">
            <div class="animate__animated animate__bounceInRight bg-white dark:bg-dark-3 relative rounded-3xl p-4 m-4">
                <div class="flex-none sm:flex">
                    <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
                        <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
                        <a class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex-auto justify-evenly">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center my-1">
								<span class="mr-3 rounded-full bg-white dark:bg-dark-2 w-8 h-8">
    <img src="https://image.winudf.com/v2/image1/Y29tLmJldHMuYWlyaW5kaWEudWlfaWNvbl8xNTU0NTM4MzcxXzA0Mw/icon.png?w=&amp;fakeurl=1" class="h-8 p-1">
</span>
                                <h2 class="font-medium">Resúmen de pedido</h2>
                            </div>
                        </div>
                        {{--
                        <div class="border-b border-dashed border-b-2 my-5"></div>
                         <div class="flex items-center">
                            <div class="flex flex-col">
                                <div class="flex-auto text-xs text-gray-400 my-1">
                                    <span class="mr-1 ">MO</span><span>19 22</span>
                                </div>
                                <div class="w-full flex-none text-lg text-blue-800 font-bold leading-none">COK</div>
                                <div class="text-xs">Cochi</div>

                            </div>
                            <div class="flex flex-col mx-auto">
                                <img src="https://image.winudf.com/v2/image1/Y29tLmJldHMuYWlyaW5kaWEudWlfaWNvbl8xNTU0NTM4MzcxXzA0Mw/icon.png?w=&amp;fakeurl=1" class="w-20 p-1">

                            </div>
                            <div class="flex flex-col ">
                                <div class="flex-auto text-xs text-gray-400 my-1">
                                    <span class="mr-1">MO</span><span>19 22</span>
                                </div>
                                <div class="w-full flex-none text-lg text-blue-800 font-bold leading-none">DXB</div>
                                <div class="text-xs">Dubai</div>

                            </div>
                        </div> --}}
                        <div class="border-b border-dashed border-b-2 dark:border-slate-800 my-5">
                            <div class="absolute rounded-full w-5 h-5 bg-blue-50 dark:bg-dark-1 -mt-2 -left-2"></div>
                            <div class="absolute rounded-full w-5 h-5 bg-blue-50 dark:bg-dark-1 -mt-2 -right-2"></div>
                        </div>
                        <div class="flex items-center p-5">
                            <div class="flex flex-col">
                                <span class="font-bold">Lista de productos</span>
                            </div>
                        </div>
                        <table>
                            <thead>
                            <tr>
                                <th class="px-4 py-2 float-left text-sm">Producto</th>
                                <th class="px-4 py-2 text-sm">Precio</th>
                                <th class="px-4 py-2 text-sm"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @if ($this->selectedProducts)
                                @foreach ($selectedProducts as $selectedProduct)
                                    <tr class="animate__animated animate__bounceInRight">
                                        <td class="p-1 w-full">
                                            <div class="bg-blue-50 dark:bg-slate-800/60 dark:text-slate-400 rounded-lg text-sm text-gray-700 px-4 py-2">
                                                {{ $selectedProduct['name'] }} <b>x{{ $selectedProduct['quantity'] }}</b>
                                            </div>
                                        </td>
                                        <td class="p-1">
                                            <div class="bg-blue-50 dark:bg-slate-800/60 dark:text-slate-400 rounded-lg text-sm text-gray-800 px-4 py-2">
                                                <p>${{ $selectedProduct['price'] * $selectedProduct['quantity'] }}</p>
                                                <p class="text-xs text-gray-500">${{ $selectedProduct['price'] }}/u</p>
                                            </div>
                                        </td>
                                        <td class="text-sm text-gray-800 px-4 py-2r">
                                            <button class="bg-red-400 h-5 w-5 rounded-full text-white" wire:click="removeSelectedProduct({{ $selectedProduct['product_id'] }})">x</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <div class="text-center bg-blue-50 opacity-50 rounded-lg p-2 font-semibold text-gray-900">Lista vacía</div>
                            @endif

                            </tbody>
                        </table>
                        <div class="border-b border-dashed border-b-2 dark:border-slate-800 my-5 pt-5">
                            <div class="absolute rounded-full w-5 h-5 bg-blue-50 dark:bg-dark-1 -mt-2 -left-2"></div>
                            <div class="absolute rounded-full w-5 h-5 bg-blue-50 dark:bg-dark-1 -mt-2 -right-2"></div>
                        </div>
                        <div class="flex items-center px-5 pt-3 text-sm">
                            <div class="flex flex-col">
                                <span class="">Total</span>
                                <div class="font-semibold">
                                    @if ($this->selectedProducts)
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($selectedProducts as $selectedProduct)
                                            @php
                                                $total += $selectedProduct['price'] * $selectedProduct['quantity'];
                                            @endphp
                                        @endforeach
                                        {{ '$' . $total }}
                                    @else
                                        $0
                                    @endif

                                </div>

                            </div>
                            <div class="flex-1 flex-col mx-auto px-4 pb-3">
                                <span class=""></span>
                                <div wire:click="save" class="bg-orange-500/80 p-2 font-semibold text-white rounded-lg w-full text-center">Confirmar compra</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



</div>

@push('js')

    <script>
        $("#category").on('change', function(e) {
            let id = $(this).val()
        @this.set('selectedCategoryId', id);
            livewire.emit('getProductsByCategoryId', id);
        })

    </script>

    <script>
        window.addEventListener('consoleLog', event => {
            console.log(event.detail.message);
        });

        $('button').click(function() {
            console.log('Button clicked');
        });
    </script>

@endpush
