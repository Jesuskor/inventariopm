<div>
    <div class="flex flex-wrap">
        <div class="lg:w-8/12 md:w-12/12 w-full p-4">
            <div class="bg-orange-500 w-full rounded-lg p-4">
                <div class="flex items-center">
                    <div class="bg-slate-700 w-16 h-16 rounded-full"></div>
                    <div class="px-3">
                        <p class="text-white font-bold text-xl">{{ $customer->name }}</p>
                        <p class="text-xs text-white/80 text-lg">Cliente desde {{ $customer->created_at->locale('es')->diffForHumans() }}</p>
                    </div>
                </div>
            </div>

            <div class="lg:flex mt-6 text-slate-700">
                <div class="bg-white shadow-app rounded-lg sm:w-full md:w-full lg:w-3/12 p-4">
                    <div class="bg-amber-500 w-10 h-10 rounded-full text-white flex items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <p class="font-bold mt-4">Número de teléfono</p>
                    <p>{{ $customer->phone }}</p>
                </div>
                <div class="bg-white shadow-app rounded-lg sm:w-full md:w-full lg:w-4/12 p-4 md:my-3 lg:my-0 lg:mx-6">
                    <div class="bg-amber-500 w-10 h-10 rounded-full text-white flex items-center justify-center">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <p class="font-bold mt-4">Correo electrónico</p>
                    <p>{{ $customer->email }}</p>
                </div>
                <div class="bg-white shadow-app rounded-lg sm:w-full md:w-full lg:w-5/12 p-4">
                    <div class="bg-amber-500 w-10 h-10 rounded-full text-white flex items-center justify-center">
                        <i class="fa-solid fa-address-book"></i>
                    </div>
                    <p class="font-bold mt-4">Dirección</p>
                    <p>{{ $customer->city . '. ' . $customer->address }}</p>
                </div>
            </div>

        </div>
        <div class="lg:w-4/12 md:w-12/12 w-full bg-blue-500/10 p-4">
            <div>

                @foreach($sales as $sale)
                    <a href="{{ route('sale-details', $sale->id) }}" class="flex -space-x-4">
                        <div class="bg-white w-full rounded-lg p-4 shadow-app">
                            <div class="flex">
                                <span class="bg-orange-500/40 text-orange-500 font-bold p-2 mr-2 rounded-lg">#{{ $sale->id }}</span>
                                <p class="text-slate-700 flex items-center justify-center">{{ $sale->created_at->formatLocalized('%d de %B de %Y') }} - {{ $sale->created_at->formatLocalized('%H:%M:%S') }}</p>
                            </div>

                            <div class="flex -space-x-4">
                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="">
                                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="">
                                <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+99</a>
                            </div>

                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</div>

{{--

<div class="grid lg:grid-cols-12 md:grid-cols-1 sm:grid-cols-1 gap-4 p-4">

    <div class="lg:col-span-3 md:col-span-12 sm:col-span-12">
        <div class="w-full overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover object-center w-full h-56" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">

            <div class="flex items-center px-6 py-3 bg-gray-900">
                <svg aria-label="headphones icon" class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 21C15.8954 21 15 20.1046 15 19V15C15 13.8954 15.8954 13 17 13H19V12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12V13H7C8.10457 13 9 13.8954 9 15V19C9 20.1046 8.10457 21 7 21H3V12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12V21H17ZM19 15H17V19H19V15ZM7 15H5V19H7V15Z"/>
                </svg>

                <h1 class="mx-3 text-lg font-semibold text-white">Focusing</h1>
            </div>

            <div class="px-6 py-4">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $customer->name }}</h1>
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


    <div class="lg:col-span-9 md:col-span-12 sm:col-span-12">

        <h1>Ventas de {{ $customer->name }}</h1>

        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Historial de compras</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
                </div>
                <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    @foreach ($sales as $sale)
                        <li>
                            <a href="{{ route('sale-details', $sale->id) }}">
                                <div class="flex items-center gap-x-6">
                                    <div class="h-16 w-16 rounded-full bg-orange-400 text-white flex justify-center items-center text-sm font-bold">
                                        1000000
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Venta #{{ $sale->id }}</h3>
                                        <p class="text-sm font-semibold leading-6 text-indigo-600">
                                            {{ $sale->created_at->formatLocalized('%d de %B de %Y') }} /
                                            {{ $sale->created_at->formatLocalized('%H:%M:%S') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach

                    <!-- More people... -->
                </ul>
            </div>
        </div>

    </div>


</div>

--}}
