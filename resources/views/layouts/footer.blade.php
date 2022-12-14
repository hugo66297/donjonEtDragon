<x-footer class="p-4 bg-white shadow md:p-6 dark:bg-gray-800 flex flex-col items-center justify-center md:flex-row md:justify-between" :bottom="request()->routeIs('categories.index')">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
        © 2022
        <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>
        . All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-400 sm:mt-0 justify-center">
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
</x-footer>
