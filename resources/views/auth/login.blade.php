<x-guest-layout>
    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-orange-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://www.troplam.com.mx/images/prensa-de-400-toneladas-en-slp.jpg" alt="" class="opacity-70 w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

            <div class="w-full h-100">

                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 mb-8">Inicie sesión en su cuenta</h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" class="block text-sm font-medium text-neutral-600" value="{{ __('Email') }}" />
                        <x-input placeholder="jhondoe@example.com" id="email" class="block w-full px-5 py-3 text-base placeholder-gray-400 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" class="block text-sm font-medium text-neutral-600" value="{{ __('Password') }}" />
                        <x-input placeholder="*************" id="password" class="block w-full px-5 py-3 text-base placeholder-gray-400 transition duration-500 ease-in-out transform border border-transparent rounded-lg text-neutral-600 bg-gray-100 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-slate-300" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

                <hr class="my-6 border-gray-300 w-full">



            </div>
        </div>

    </section>

</x-guest-layout>
