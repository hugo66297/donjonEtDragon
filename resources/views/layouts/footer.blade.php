@props(['display' => 'flex'])

<footer class="shadow p-5 bg-gray-800 {{$display}} z-50 flex-col items-center justify-center md:flex-row md:justify-between">
    <span class="text-sm sm:text-center text-gray-400 flex flex-wrap items-center justify-center">
        © 2022
        <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>
        . All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-400 sm:mt-0 justify-center">
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
</footer>
