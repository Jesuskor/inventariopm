<div class="top-bar top-0 left-0 fixed w-full h-16">
    <div class="-intro-y top-bar__content bg-white border-theme-3 dark:bg-dark-2 dark:border-dark-2 border-b w-full h-full flex px-5">
        <a class="hidden md:flex items-center h-full mr-auto" href="http://localhost/page/dashboard">
            {{-- <img alt="Topson Messenger Tailwind HTML Admin Template" class="h-8" src="dist/images/logo.svg"> --}}
            <div class="text-base font-light ml-4"> <span class="font-medium">Maquinados</span> & Troquelados </div>
        </a>
        <a wire:click="toggleAsideBarMenu" class="mobile-menu-toggler flex md:hidden items-center h-full mr-auto px-5 -ml-5"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 w-5 h-5 transform rotate-90"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg> </a>
        <div class="h-full flex items-center">
            <div class="mr-3">Dark Mode</div>
            <input class="form-check-switch" type="checkbox" id="dark-mode-switcher" x-on:click="darkMode = !darkMode">
        </div>
        <div class="hidden md:flex items-center px-5"> <a data-toggle="modal" data-target="#invite-friends-modal" class="bg-orange-400 px-3 py-2 text-white rounded-lg">Invite Friends</a> </div>
        <div class=" relative text-gray-600 border-theme-7 dark:border-dark-4 dark:text-gray-300 h-full flex items-center px-5 relative -mr-3 md:mr-0 md:border-l md:border-r">
            <a class="h-full flex items-center pl-5" aria-expanded="false">
                <div class="w-8 h-8 image-fit">
                    <img class="rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                </div>
                <div class="hidden md:block ml-3">
                    <div class="w-28 truncate font-medium leading-tight">{{ Auth::user()->name }}</div>
                    <div class="account-dropdown__info text-xs text-gray-600">Frontend Engineer</div>
                </div>
            </a>
        </div>

        <div class="flex justify-center items-center">

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <a href="{{ route('logout') }}"
                   class="text-gray-600 dark:text-gray-300  h-full flex items-center px-5 relative -mr-3 md:mr-0"
                   @click.prevent="$root.submit();">
                    <div class="relative">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                </a>
            </form>
        </div>

    </div>
</div>
