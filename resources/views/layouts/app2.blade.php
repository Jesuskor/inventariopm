<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-cloak
      x-data="{darkMode: localStorage.getItem('dark') === 'true'}"
      x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
      x-bind:class="{'dark': darkMode}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/94cf8ac3b1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Styles -->
    <link rel="stylesheet" href="http://topson.left4code.com/dist/css/app.css">
    <style>
        [x-cloak] { display: none; !important;}
    </style>
    @livewireStyles
</head>
<body class="main">

{{-- sidebar --}}
@livewire('app.sidebar')

{{-- Content --}}
<div class="md:pl-16 pt-16">
    <div class="-mt-16 ml-auto xl:-ml-16 mr-auto xl:pl-16 pt-16 xl:h-screen w-auto sm:w-3/5 xl:w-auto grid grid-cols-12 gap-6">
        <div class="side-content col-span-12 xl:col-span-3 -mt-16 xl:mt-0 pt-20 xl:-mr-6 px-6 xl:pt-6 flex-col overflow-hidden" data-content="profile">
            <div class="intro-y text-xl font-medium">Profile</div>
            <div class="intro-y box relative px-4 py-6 mt-5">
                <a href="javascript:;" class="text-gray-600 tooltip w-8 h-8 block flex items-center justify-center absolute top-0 right-0 mr-1 mt-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 w-4 h-4"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> </a>
                <div class="w-20 h-20 mx-auto image-fit">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 top-0 mt-1 mr-1 rounded-full border-2"></div>
                </div>
                <div class="text-base font-medium text-center mt-3">John Travolta</div>
                <div class="text-gray-600 text-center text-xs uppercase mt-0.5">Software Engineer</div>
            </div>
            <div class="intro-y box p-4 mt-3">
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b pb-3">
                    <div class="">
                        <div class="text-gray-600">Country</div>
                        <div class="capitalize mt-0.5">New York City, USA</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe w-4 h-4 text-gray-600 ml-auto"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                    <div class="">
                        <div class="text-gray-600">Phone</div>
                        <div class="mt-0.5">+32 19 23 62 24 34</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic w-4 h-4 text-gray-600 ml-auto"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                    <div class="">
                        <div class="text-gray-600">Gender</div>
                        <div class="capitalize mt-0.5">male</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 text-gray-600 ml-auto"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center py-3">
                    <div class="">
                        <div class="text-gray-600">Email</div>
                        <div class="mt-0.5">johntravolta@left4code.com</div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 text-gray-600 ml-auto"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
            </div>
            <div class="intro-y box p-4 mt-3">
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b pb-3">
                    <div class="">
                        <div class="text-gray-600">Twitter</div>
                        <a class="mt-0.5" href="">@johntravolta</a>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter w-4 h-4 text-gray-600 ml-auto"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                    <div class="">
                        <div class="text-gray-600">Facebook</div>
                        <a class="mt-0.5" href="">johntravolta</a>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook w-4 h-4 text-gray-600 ml-auto"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                </div>
                <div class="border-gray-200 dark:border-dark-5 flex items-center py-3">
                    <div class="">
                        <div class="text-gray-600">Instagram</div>
                        <a class="mt-0.5" href="">@johntravolta</a>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram w-4 h-4 text-gray-600 ml-auto"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </div>
            </div>
        </div>
        <div class="side-content col-span-12 xl:col-span-3 -mt-16 xl:mt-0 pt-20 xl:-mr-6 px-6 xl:pt-6 flex-col overflow-hidden" data-content="contacts">
            <div class="intro-y text-xl font-medium">Contacts</div>
            <div class="intro-y relative mt-5 mb-6">
                <input type="text" class="form-control box py-3 px-4 border-transparent pr-8" placeholder="Search for contacts...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-gray-600 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
            <div class="intro-y overflow-y-auto scrollbar-hidden -mx-5 px-5">
                <div class="user-list">
                    <div class="intro-x">
                        <div class="intro-x text-gray-500 mb-3">A</div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">John Travolta</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 26 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 59 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 29 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x text-gray-500 mt-6 mb-3">B</div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">John Travolta</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 26 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 59 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 29 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Sylvester Stallone</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 42 minutes ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x text-gray-500 mt-6 mb-3">C</div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">John Travolta</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 26 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x block">
                            <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                <div class="w-10 h-10 flex-none image-fit mr-1">
                                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                    <div class="flex items-center text-xs mt-0.5">
                                        <div class="text-gray-600 dark:text-gray-500 truncate">Last seen 59 seconds ago ago</div>
                                    </div>
                                </div>
                                <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                    <a class="dropdown-toggle w-4 h-4" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content col-span-12 xl:col-span-3 -mt-16 xl:mt-0 pt-20 xl:-mr-6 px-6 xl:pt-6 side-content--active flex-col overflow-hidden" data-content="chats">
            <div class="intro-y text-xl font-medium">Chats</div>
            <div class="intro-y relative mt-5">
                <input type="text" class="form-control box py-3 px-4 border-transparent pr-8" placeholder="Search for messages or users...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-gray-600 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
            <div class="intro-y flex-none overflow-x-auto overflow-y-hidden scrollbar-hidden">
                <div class="flex mt-6">
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">John Travolta</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Brad Pitt</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Leonardo DiCaprio</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Sylvester Stallone</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Johnny Depp</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Russell Crowe</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Arnold Schwarzenegger</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Sylvester Stallone</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Al Pacino</div>
                    </a>
                    <a href="" class="w-12 mr-3 cursor-pointer tooltip">
                        <div class="w-12 h-12 flex-none image-fit rounded-full">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                        </div>
                        <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Angelina Jolie</div>
                    </a>
                </div>
            </div>
            <div class="intro-y text-base font-medium leading-tight mt-3">Recent Chats</div>
            <div class="intro-y overflow-y-auto scrollbar-hidden pt-2 mt-3 -mx-5 px-5">
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 bg-theme-1 dark:bg-theme-1">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-white">John Travolta</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-white">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-white">03:20 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-white" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Brad Pitt</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Leonardo DiCaprio</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">05:09 AM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Sylvester Stallone</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Johnny Depp</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Russell Crowe</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Arnold Schwarzenegger</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Sylvester Stallone</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Al Pacino</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Angelina Jolie</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">06:05 AM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Russell Crowe</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Al Pacino</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">06:05 AM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Bruce Willis</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Brad Pitt</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Keanu Reeves</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Christian Bale</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Leonardo DiCaprio</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Tom Cruise</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Kevin Spacey</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">01:10 PM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
                <div class="intro-x">
                    <div class="zoom-in">
                        <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 mt-4 ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <a href="javascript:;" class="font-medium text-gray-800 dark:text-white">Denzel Washington</a>
                                <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-gray-800 dark:text-gray-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="whitespace-nowrap text-opacity-80 text-xs text-gray-800 dark:text-gray-600">05:09 AM</div>
                                <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                    <a class="dropdown-toggle block text-opacity-70 text-gray-500" href="javascript:;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-6 h-6"><polyline points="6 9 12 15 18 9"></polyline></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Contact </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy w-4 h-4 mr-2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Contact </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content col-span-12 xl:col-span-3 -mt-16 xl:mt-0 pt-20 xl:-mr-6 px-6 xl:pt-6 flex-col overflow-hidden" data-content="groups">
            <div class="intro-y text-xl font-medium">Create Group</div>
            <div class="intro-y box p-2 mt-5 mb-6">
                <div class="boxed-tabs nav nav-tabs justify-center flex" role="tablist"> <a data-toggle="tab" data-target="#group-members" href="javascript:;" class="hover:bg-gray-100 dark:hover:bg-dark-2 flex-1 py-2 rounded-md text-center active" id="group-members-tab" role="tab" aria-controls="group-members" aria-selected="true">Members</a> <a data-toggle="tab" data-target="#group-details" href="javascript:;" class="hover:bg-gray-100 dark:hover:bg-dark-2 flex-1 py-2 rounded-md text-center" id="group-details-tab" role="tab" aria-controls="group-details" aria-selected="false">Details</a> </div>
            </div>
            <div class="intro-y overflow-y-auto scrollbar-hidden -mx-5 px-5">
                <div class="tab-content">
                    <div class="tab-pane active" id="group-members" role="tabpanel" aria-labelledby="group-members-tab">
                        <div class="user-list">
                            <div class="intro-x pb-6">
                                <div class="intro-x text-gray-500 mb-3">A</div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">John Travolta</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 26 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-a-0">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 59 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-a-1">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 29 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-a-2">
                                    </div>
                                </div>
                                <div class="intro-x text-gray-500 mt-6 mb-3">B</div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">John Travolta</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 26 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-b-0">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 59 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-b-1">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Leonardo DiCaprio</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 29 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-b-2">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Sylvester Stallone</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 42 minutes ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-b-3">
                                    </div>
                                </div>
                                <div class="intro-x text-gray-500 mt-6 mb-3">C</div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in ">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">John Travolta</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 26 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-c-0">
                                    </div>
                                </div>
                                <div class="intro-x block">
                                    <div class="box dark:bg-dark-3 cursor-pointer relative flex items-center px-4 py-3 zoom-in mt-4">
                                        <div class="w-10 h-10 flex-none image-fit mr-1">
                                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                                        </div>
                                        <div class="ml-2 overflow-hidden">
                                            <a href="javascript:;" class="font-medium">Brad Pitt</a>
                                            <div class="flex items-center text-xs">
                                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">Last seen 59 seconds ago ago</div>
                                            </div>
                                        </div>
                                        <input class="form-check-switch ml-auto" type="checkbox" id="user-list-c-1">
                                    </div>
                                </div>
                            </div>
                            <div class="user-list__action bg-theme-2 dark:bg-dark-6 -mx-5 px-5 pb-6">
                                <button class="btn btn-primary text-white w-full">Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="group-details" role="tabpanel" aria-labelledby="group-details-tab">
                        <div class="box p-4 mt-3 mb-6">
                            <div>
                                <label for="create-group-form-1" class="form-label">Photo</label>
                                <div class="image-upload border shadow-sm relative flex flex-col items-center justify-center rounded-md py-8 mt-3">
                                    <div class="image-upload__icon w-12 h-12 rounded-full flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image w-5 h-5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg> </div>
                                    <div class="image-upload__info mt-2">Choose your group profile photo</div>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" id="create-group-form-1">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="create-group-form-2" class="form-label">Group Name</label>
                                <input type="text" class="form-control" id="create-group-form-2">
                            </div>
                            <div class="mt-3">
                                <label for="create-group-form-3" class="form-label">Tagline</label>
                                <input type="text" class="form-control" id="create-group-form-3">
                            </div>
                            <div class="mt-3">
                                <label for="create-group-form-4" class="form-label">Public</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-switch" id="create-group-form-4">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="create-group-form-5" class="form-label">Description</label>
                                <textarea class="form-control" rows="5" id="create-group-form-5"></textarea>
                            </div>
                            <button class="btn btn-primary w-full mt-3">Create Group</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-box border-theme-5 col-span-12 xl:col-span-6 flex flex-col overflow-hidden xl:border-l xl:border-r p-6">
            <div class="intro-y box border border-theme-3 dark:bg-dark-2 dark:border-dark-2 flex items-center px-5 py-4">
                <div class="flex items-center mr-auto">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                        <div class="bg-green-500 w-3 h-3 absolute right-0 top-0 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <a href="javascript:;" class="text-base font-medium">John Travolta</a>
                        <div class="text-gray-600">Online</div>
                    </div>
                </div>
                <a class="text-gray-600 hover:text-theme-1" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera w-4 h-4 sm:w-6 sm:h-6"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> </a>
                <a class="text-gray-600 hover:text-theme-1 ml-2 sm:ml-5" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic w-4 h-4 sm:w-6 sm:h-6"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg> </a>
            </div>
            <div class="overflow-y-scroll scrollbar-hidden pt-5 flex-1">
                <div class="-intro-x chat-text-box flex items-end float-left mb-4">
                    <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative mr-4">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                    </div>
                    <div class="w-full">
                        <div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="box leading-relaxed dark:text-gray-300 text-gray-700 px-4 py-3 mt-3"> Lorem ipsum sit <a class="text-theme-1" href="">@edwardnorton</a> amen dolor, lorem ipsum sit amen dolor </div>
                                <div class="hidden sm:block dropdown relative ml-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="box text-gray-700 dark:text-gray-300 flex flex-col sm:flex-row items-center mt-3 p-3">
                                    <div class="chat-text-box__content__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                                    </div>
                                    <div class="sm:ml-3 mt-3 sm:mt-0 text-center sm:text-left">
                                        <div class="text-gray-700 dark:text-gray-300 whitespace-nowrap font-medium">preview-8.jpg</div>
                                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                                    </div>
                                    <div class="sm:ml-20 mt-3 sm:mt-0 flex">
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center sm:ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> </a>
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share w-4 h-4"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg> </a>
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg> </a>
                                    </div>
                                </div>
                                <div class="hidden sm:block dropdown relative ml-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both mb-2"></div>
                        <div class="text-gray-600 text-xs">2 mins ago</div>
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="intro-x chat-text-box flex items-end float-right mb-4">
                    <div class="w-full">
                        <div>
                            <div class="chat-text-box__content flex items-center float-right">
                                <div class="hidden sm:block dropdown relative mr-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box leading-relaxed bg-theme-1 text-opacity-80 text-white px-4 py-3 mt-3"> Lorem ipsum sit <a class="text-white" href="">@morganfreeman</a> amen dolor, lorem ipsum sit amen dolor </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat-text-box__content flex items-center float-right">
                                <div class="hidden sm:block dropdown relative mr-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded-md text-gray-700 chat-text-box__content__text--image flex justify-end mt-3">
                                    <div class="tooltip w-16 h-16 image-fit zoom-in">
                                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-4.jpg">
                                    </div>
                                    <div class="tooltip w-16 h-16 image-fit ml-2 zoom-in">
                                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-14.jpg">
                                    </div>
                                    <div class="tooltip w-16 h-16 image-fit ml-2 zoom-in">
                                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-12.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both mb-2"></div>
                        <div class="text-gray-600 text-xs text-right">1 mins ago</div>
                    </div>
                    <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative ml-4">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="intro-y text-gray-500 text-xs text-center mb-6 mt-5">12 June 2020</div>
                <div class="-intro-x chat-text-box flex items-end float-left mb-4">
                    <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative mr-4">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                    </div>
                    <div class="w-full">
                        <div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="box leading-relaxed dark:text-gray-300 text-gray-700 px-4 py-3 mt-3"> Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor </div>
                                <div class="hidden sm:block dropdown relative ml-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="rounded-md text-gray-700 chat-text-box__content__text--image flex justify-end mt-3">
                                    <div class="tooltip w-16 h-16 image-fit zoom-in">
                                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-4.jpg">
                                    </div>
                                    <div class="tooltip w-16 h-16 image-fit ml-2 zoom-in">
                                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-md" src="dist/images/preview-12.jpg">
                                    </div>
                                </div>
                                <div class="hidden sm:block dropdown relative ml-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="box leading-relaxed dark:text-gray-300 text-gray-700 px-4 py-3 mt-3"> Contrary to popular belief </div>
                                <div class="hidden sm:block dropdown relative ml-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both mb-2"></div>
                        <div class="text-gray-600 text-xs">10 secs ago</div>
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="intro-x chat-text-box flex items-end float-right mb-4">
                    <div class="w-full">
                        <div>
                            <div class="chat-text-box__content flex items-center float-right">
                                <div class="hidden sm:block dropdown relative mr-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box leading-relaxed bg-theme-1 text-opacity-80 text-white px-4 py-3 mt-3"> Lorem ipsum </div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="chat-text-box__content flex items-center float-right">
                                <div class="hidden sm:block dropdown relative mr-3 mt-3">
                                    <a href="javascript:;" class="dropdown-toggle w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left w-4 h-4 mr-2"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg> Reply </a>
                                            <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box leading-relaxed text-gray-700 dark:text-gray-300 flex flex-col sm:flex-row items-center mt-3 p-3">
                                    <div class="chat-text-box__content__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                        <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PNG</div>
                                    </div>
                                    <div class="sm:ml-3 mt-3 sm:mt-0 text-center sm:text-left">
                                        <div class="text-gray-700 dark:text-gray-300 whitespace-nowrap font-medium">preview-10.jpg</div>
                                        <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.4 MB Image File</div>
                                    </div>
                                    <div class="sm:ml-20 mt-3 sm:mt-0 flex">
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> </a>
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share w-4 h-4"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg> </a>
                                        <a href="javascript:;" class="tooltip w-8 h-8 block border rounded-full flex-none flex items-center justify-center ml-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both mb-2"></div>
                        <div class="text-gray-600 text-xs text-right">1 secs ago</div>
                    </div>
                    <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative ml-4">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="-intro-x chat-text-box flex items-end float-left mb-4">
                    <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                    </div>
                    <div class="w-full">
                        <div>
                            <div class="chat-text-box__content flex items-center float-left">
                                <div class="box leading-relaxed dark:text-gray-300 text-gray-700 px-4 py-3 mt-3">
                                    John Travolta is typing
                                    <span class="typing-dots ml-1"> <span>.</span> <span>.</span> <span>.</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="intro-y chat-input box border-theme-3 dark:bg-dark-2 dark:border-dark-2 border flex items-center px-5 py-4">
                <div class="dropdown relative" data-placement="top">
                    <a href="javascript:;" class="text-gray-600 hover:text-theme-1 dropdown-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus w-5 h-5 sm:w-6 sm:h-6"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> </a>
                    <div class="chat-input__dropdown dropdown-menu">
                        <div class="dropdown-menu__content p-2">
                            <a href="" class="shadow-md text-gray-600 bg-white rounded-full dark:text-gray-300 dark:bg-dark-3 hover:bg-theme-1 hover:text-white dark:hover:bg-theme-1 flex items-center block p-3 transition duration-300 rounded-md mb-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera w-5 h-5"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> </a>
                            <a href="" class="shadow-md text-gray-600 bg-white rounded-full dark:text-gray-300 dark:bg-dark-3 hover:bg-theme-1 hover:text-white dark:hover:bg-theme-1 flex items-center block p-3 transition duration-300 rounded-md mb-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic w-5 h-5"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg> </a>
                            <a href="" class="shadow-md text-gray-600 bg-white rounded-full dark:text-gray-300 dark:bg-dark-3 hover:bg-theme-1 hover:text-white dark:hover:bg-theme-1 flex items-center block p-3 transition duration-300 rounded-md mb-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-5 h-5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> </a>
                        </div>
                    </div>
                </div>
                <textarea class="form-control h-12 shadow-none resize-none border-transparent px-5 py-3 focus:shadow-none truncate mr-3 sm:mr-0" rows="1" placeholder="Type your message..."></textarea>
                <div class="dropdown relative mr-3 sm:mr-5" data-placement="top-end">
                    <a href="javascript:;" class="text-gray-600 hover:text-theme-1 dropdown-toggle w-4 h-4 sm:w-5 sm:h-5 block"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile w-full h-full"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg> </a>
                    <div class="chat-input__smiley dropdown-menu">
                        <div class="dropdown-menu__content box dark:text-gray-300 dark:bg-dark-3 shadow-md">
                            <div class="chat-input__smiley__box flex flex-col pb-3 -mt-2">
                                <div class="px-3 pt-5">
                                    <div class="relative">
                                        <input type="text" class="form-control bg-gray-200 border-transparent pr-10" placeholder="Search emojis...">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-5 h-5 absolute my-auto inset-y-0 mr-3 right-0"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </div>
                                </div>
                                <div class="chat-input__smiley__box__tabs text-gray-600 nav nav-tabs flex px-3 mt-5" role="tablist">
                                    <a data-toggle="tab" data-target="#history" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2 active" id="history-tab" role="tab" aria-controls="history" aria-selected="true">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#smile" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="smile-tab" role="tab" aria-controls="smile" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                            <path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#cat" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="cat-tab" role="tab" aria-controls="cat" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#coffee" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="coffee-tab" role="tab" aria-controls="coffee" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                            <path fill="currentColor" d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#futbol" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="futbol-tab" role="tab" aria-controls="futbol" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#building" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="building-tab" role="tab" aria-controls="building" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="currentColor" d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#lightbulb" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="lightbulb-tab" role="tab" aria-controls="lightbulb" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                            <path fill="currentColor" d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"></path>
                                        </svg>
                                    </a>
                                    <a data-toggle="tab" data-target="#music" href="javascript:;" class="py-2 flex justify-center flex-1 rounded hover:bg-gray-200 dark:hover:bg-dark-2" id="music-tab" role="tab" aria-controls="music" aria-selected="false">
                                        <svg class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M511.99 32.01c0-21.71-21.1-37.01-41.6-30.51L150.4 96c-13.3 4.2-22.4 16.5-22.4 30.5v261.42c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64V214.31l256-75.02v184.63c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64l-.01-351.99z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="tab-content overflow-hidden mt-5">
                                    <div class="h-full tab-pane active" id="history" role="tabpanel" aria-labelledby="history-tab">
                                        <div class="font-medium px-3">Recent Emojis</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😂</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="smile" role="tabpanel" aria-labelledby="smile-tab">
                                        <div class="font-medium px-3">Smileys &amp; People</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☺️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☹️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☠️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">😾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍⚕️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍⚕️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🎓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🎓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🏫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🏫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍⚖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍⚖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🌾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🌾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🍳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🍳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🔧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🔧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🏭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🏭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍💼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍💼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🔬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🔬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍💻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍💻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🎤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🎤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🎨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🎨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍✈️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍✈️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🚀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🚀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍🚒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍🚒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👮‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👮‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕵️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕵️‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕵️‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💂‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💂‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👷‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👷‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👳‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👳‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👱‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👱‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧙‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧙‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧚‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧚‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧛‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧛‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧜‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧜‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧝‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧝‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧞‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧞‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧟‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧟‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙍‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙍‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙎‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙎‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙅‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙅‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙆‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙆‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💁‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💁‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙋‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙋‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙇‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙇‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤦‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤦‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤷‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤷‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💆‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💆‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💇‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💇‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚶‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚶‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏃‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏃‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👯‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👯‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧖‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧖‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧗‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧗‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧘‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧘‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕴️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗣️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛷️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏌️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏌️‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏌️‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏄‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏄‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚣‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚣‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏊‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏊‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛹️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛹️‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛹️‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏋️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏋️‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏋️‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚴‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚴‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚵‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚵‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏎️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏍️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤸‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤸‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤼‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤼‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤽‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤽‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤾‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤾‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤹‍♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤹‍♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍❤️‍💋‍👨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍❤️‍💋‍👨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍❤️‍💋‍👩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍❤️‍👨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍❤️‍👨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍❤️‍👩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👩‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👩‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👩‍👧‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👩‍👦‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👩‍👧‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👨‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👨‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👨‍👧‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👨‍👦‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👨‍👧‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👩‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👩‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👩‍👧‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👩‍👦‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👩‍👧‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👦‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👧‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👨‍👧‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👦‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👧‍👦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👩‍👧‍👧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☝️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✌️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖐️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✍️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🙏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🤝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👁️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👁️‍🗨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❤️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❣️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗯️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕳️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕶️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛍️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">👒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛑️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💎</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="cat" role="tabpanel" aria-labelledby="cat-tab">
                                        <div class="font-medium px-3">Animals &amp; Nature</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐿️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕊️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🐞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕷️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕸️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🦂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏵️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☘️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍃</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="coffee" role="tabpanel" aria-labelledby="coffee-tab">
                                        <div class="font-medium px-3">Food &amp; Drink</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌶️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🧀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍽️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🍴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏺</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="futbol" role="tabpanel" aria-labelledby="futbol-tab">
                                        <div class="font-medium px-3">Activities</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎗️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎟️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛸️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕹️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♠️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♥️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♦️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♣️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🃏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🀄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎴</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="building" role="tabpanel" aria-labelledby="building-tab">
                                        <div class="font-medium px-3">Travel &amp; Places</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗺️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏔️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏕️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏜️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏝️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏞️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏟️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏛️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏗️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏘️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏙️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏚️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛩️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖼️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛣️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛤️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛳️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛴️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛥️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✈️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛩️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛎️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛏️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛋️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⌛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⌚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏱️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏲️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌡️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⭐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☁️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛈️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌤️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌥️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌦️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌧️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌩️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌪️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌫️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌬️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛱️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❄️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☃️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☄️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🌊</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="lightbulb" role="tabpanel" aria-labelledby="lightbulb-tab">
                                        <div class="font-medium px-3">Objects</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎙️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎚️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎛️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🥁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☎️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖥️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⌨️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖱️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖲️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎞️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📽️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕯️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗞️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏷️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✉️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📥</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗳️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✏️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✒️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖋️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖊️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖌️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖍️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗒️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗓️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📇</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🖇️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗃️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗄️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗑️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗝️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔨</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛏️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚒️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛠️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗡️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚔️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛡️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚙️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗜️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚗️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛓️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚱️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🗿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛢️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛒</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-full tab-pane" id="music" role="tabpanel" aria-labelledby="music-tab">
                                        <div class="font-medium px-3">Symbols</div>
                                        <div class="h-full pb-10 px-2 overflow-y-auto scrollbar-hidden mt-2">
                                            <div class="grid grid-cols-8 text-2xl">
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🏧</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚮</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚠️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚭</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🚷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔞</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☢️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☣️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⬆️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↗️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➡️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↘️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⬇️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↙️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⬅️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↕️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↔️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↩️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">↪️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⤴️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⤵️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔃</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔄</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔝</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🛐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚛️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕉️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✡️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☸️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☯️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✝️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☦️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☪️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☮️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🕎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♈</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♉</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♊</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♋</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♍</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♏</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⛎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔀</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔂</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">▶️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏩</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏭️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏯️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">◀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏮️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔼</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏬</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏸️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏹️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏺️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⏏️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🎦</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔆</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♀️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚕️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">♻️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚜️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔱</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">📛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⭕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✅</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">☑️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✔️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✖️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❌</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➰</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">➿</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">〽️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✳️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">✴️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❇️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">‼️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⁉️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">❗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">〰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">©️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">®️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">™️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">#️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">*️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">0️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">1️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">2️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">3️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">4️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">5️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">6️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">7️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">8️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">9️⃣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔟</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔡</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔢</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔣</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔤</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🅰️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆎</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🅱️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆒</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆓</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">ℹ️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆔</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">Ⓜ️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆕</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆖</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🅾️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆗</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🅿️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆙</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🆚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈁</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈂️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈷️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈯</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🉐</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈚</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🉑</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">㊗️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">㊙️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🈵</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">▪️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">▫️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">◻️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">◼️</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">◽</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">◾</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⬛</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⬜</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔶</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔷</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔸</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔹</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔺</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔻</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">💠</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔘</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔲</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔳</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚪</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">⚫</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔴</button>
                                                <button class="rounded hover:bg-gray-200 dark:hover:bg-dark-2 focus:outline-none">🔵</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:;" class="bg-theme-1 text-white w-8 h-8 sm:w-10 sm:h-10 block rounded-full flex-none flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send w-4 h-4 sm:w-5 sm:h-5"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> </a>
            </div>
        </div>
        <div class="info-content col-span-12 xl:col-span-3 flex flex-col overflow-hidden pl-6 xl:pl-0 pr-6">
            <div class="overflow-y-auto scrollbar-hidden py-6">
                <div class="intro-y box relative px-4 py-6">
                    <a href="javascript:;" class="text-gray-600 tooltip w-8 h-8 block flex items-center justify-center absolute top-0 right-0 mr-1 mt-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 w-4 h-4"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> </a>
                    <div class="w-20 h-20 mx-auto image-fit">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                        <div class="bg-green-500 border-white w-3 h-3 absolute right-0 top-0 mt-1 mr-1 rounded-full border-2"></div>
                    </div>
                    <div class="text-base font-medium text-center mt-3">John Travolta</div>
                    <div class="text-gray-600 text-center text-xs uppercase mt-0.5">Software Engineer</div>
                </div>
                <div class="intro-y box p-4 mt-3">
                    <div class="text-base font-medium">Personal Information</div>
                    <div class="mt-4">
                        <div class="border-gray-200 dark:border-dark-5 flex items-center border-b pb-3">
                            <div class="">
                                <div class="text-gray-600">Country</div>
                                <div class="mt-0.5">New York City, USA</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe w-4 h-4 text-gray-600 ml-auto"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <div class="border-gray-200 dark:border-dark-5 flex items-center border-b py-3">
                            <div class="">
                                <div class="text-gray-600">Phone</div>
                                <div class="mt-0.5">+32 19 23 62 24 34</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic w-4 h-4 text-gray-600 ml-auto"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </div>
                        <div class="border-gray-200 dark:border-dark-5 flex items-center py-3">
                            <div class="">
                                <div class="text-gray-600">Email</div>
                                <div class="mt-0.5">johntravolta@left4code.com</div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 text-gray-600 ml-auto"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="intro-y h-full box flex flex-col p-4 mt-3">
                    <div class="text-base font-medium">Shared Files</div>
                    <div class="mt-4 overflow-x-hidden overflow-y-auto scrollbar-hidden">
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative ">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-8.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">MP4</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Celine Dion - Ashes.mp4</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 MB Audio File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Laravel 7</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">120 MB Document File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">ZIP</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Repository</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 KB Zipped File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-3.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-10.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-11.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-6.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">TXT</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Resources.txt</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">2.2 MB Text File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Documentation</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">4 MB Document File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">MP4</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Celine Dion - Ashes.mp4</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">20 MB Audio File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Documentation</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">4 MB Document File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">TXT</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Resources.txt</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">2.2 MB Text File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-11.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PDF</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Laravel 7</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">120 MB Document File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-13.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-8.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1.2 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">JPG</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">preview-5.jpg</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 MB Image File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PHP</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Routes.php</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 KB Script File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shared-file border-gray-200 dark:border-dark-5 flex items-center p-3 border rounded-md relative mt-3">
                            <div class="shared-file__icon text-white w-12 flex-none bg-contain relative bg-no-repeat bg-center block">
                                <div class="absolute m-auto top-0 left-0 right-0 bottom-0 flex items-center justify-center">PHP</div>
                            </div>
                            <div class="w-full ml-3">
                                <div class="text-gray-700 dark:text-gray-300 w-4/5 whitespace-nowrap font-medium truncate">Routes.php</div>
                                <div class="text-gray-600 whitespace-nowrap text-xs mt-0.5">1 KB Script File</div>
                            </div>
                            <div class="dropdown absolute flex items-center top-0 bottom-0 right-0 mr-4 ml-auto">
                                <a class="dropdown-toggle w-4 h-4" href="javascript:;" aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share </a>
                                        <a href="" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stack('modals')

@livewireScripts

@stack('js')

<script>
    Livewire.on('alert', function(message) {
        Swal.fire(
            '¡Buen trabajo!',
            message,
            'success'
        )
    })
</script>

</body>
</html>
