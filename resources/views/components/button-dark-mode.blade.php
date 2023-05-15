<!-- Button dark mode -->
<button x-cloak x-on:click="darkMode = !darkMode;"
        class="inline-flex items-center justify-center p-2 ltr:ml-3 rtl:mr-3 rounded-md text-gray-400">
    <svg x-show="!darkMode" class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
         viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 1a9 9 0 0 1 9 9c0 4.97-4.03 9-9 9s-9-4.03-9-9a9 9 0 0 1 9-9zm0 2a7 7 0 0 0-7 7c0 3.866 3.134 7 7 7s7-3.134 7-7a7 7 0 0 0-7-7z"></path>
    </svg>
    <svg x-show="darkMode" class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
         viewBox="0 0 24 24" stroke="currentColor">
        <path d="M12 1a9 9 0 0 0-9 9c0 4.97 4.03 9 9 9s9-4.03 9-9a9 9 0 0 0-9-9zM7.57 9.03a1.5 1.5 0 1 1 2.12-2.12 1.5 1.5 0 0 1-2.12 2.12zM12 18a6 6 0 1 1 0-12 6 6 0 0 1 0 12z"></path>
    </svg>
</button>
