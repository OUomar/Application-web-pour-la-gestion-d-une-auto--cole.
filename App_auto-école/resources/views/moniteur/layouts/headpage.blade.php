<nav class="bg-white shadow-lg ">
    <div class="mx-auto px-2 sm:px-8">
        <div class="relative flex items-center justify-between md:justify-end h-16">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!--mobile button-->
                <button type="button" @click="open=!open" @click.away="open=false" class="inline-flex items-center justify-center p-2 rounded-md text-blue-500 hover:bg-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
            </div>
            <div class="flex flex-1 ml-24 md:hidden ">
                <div class="flex flex-shrink-0 items-center">
                <a href="">
            <x-application-logo class="block h-10 w-auto fill-current bg-blue-500 p-1 rounded-md " />
        </a>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">

<button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="flex items-center text-sm font-medium text-black bg-gray-200 p-2  rounded-full  mr-4" type="button">  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
<path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
</svg> </button>

<!-- Dropdown menu -->
<div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
<li>
<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"></a>
</li>

</ul>
<div class="py-1">
<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Separated link</a>
</div>
</div>


<button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider2" class="flex items-center text-sm font-medium text-black bg-gray-200 p-2  rounded-full  mr-4" type="button">
<span class="text-red-500 text-xl font-bold "></span>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>

</button>

<!-- Dropdown menu -->
<div id="dropdownDivider2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
<li>
<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"></a>
</li>

</ul>
<div class="py-1">
<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notification</a>
</div>
</div>


            <x-dropdown align="right" width="48">
        <x-slot name="trigger">

            <button class="flex items-center text-sm font-medium text-blue-100 border-2 p-1 rounded-full focus:outline-none  transition duration-100 ease-in-out mr-4">
                <div><img  src="{{asset('assets/img/login.png')}}" alt="user_photo" class=" h-6 w-auto rounded-full "></div>
            </button>
        </x-slot>

        <x-slot name="content">
        <div class="py-1">
        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">paramètre</a>
        </div>
       <hr>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Se déconnecter') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
            </div>
        </div>
    </div>
</nav>
