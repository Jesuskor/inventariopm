<div class="{{ $isSidebarOpen ? 'grid grid-cols-12' : 'flex' }}">

    <div class="{{ $isSidebarOpen ? 'col-span-2' : 'transition hidden duration-700' }} h-screen">

        <nav
            id="sidenav-8"
            class="left-0 top-0 z-[1035] h-full w-60 overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] transition-all duration-500 {{ $isSidebarOpen ? 'translate-x-0' : '-translate-x-full' }}"
            data-te-sidenav-init
            data-te-sidenav-hidden="false"
            data-te-sidenav-position="absolute"
            data-te-sidenav-accordion="true"
        >
            <ul
                class="relative m-0 list-none px-[0.2rem] pb-12"
                data-te-sidenav-menu-ref>
                <li class="relative">
                    <a
                        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span>TITULO</span>
                    </a>
                </li>
                <li class="relative pt-4">
                    <span class="px-6 py-4 text-[0.6rem] font-bold uppercase text-gray-600 dark:text-gray-400">Create</span>
                    <a class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10" data-te-sidenav-link-ref>
                        <span class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                        </span>
                        <span>Project</span>
                    </a>
                </li>
                <li class="relative">
                    <a
                        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref>
                        <span
                            class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-5 w-5">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                        </span>
                        <span>Database</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="{{ $isSidebarOpen ? 'col-span-10' : 'col-span-12' }}">
        @livewire('navigation-menu')
        <button wire:click="toggleSidebar">Toggle Sidebar</button>
    </div>

</div>
