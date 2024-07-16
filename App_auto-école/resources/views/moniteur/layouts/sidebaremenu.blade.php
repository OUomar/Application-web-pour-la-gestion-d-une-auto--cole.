<div class=" flex content-center ">
    <div class=" ml-4">
        <a href="">
        <x-application-logo class=" h-16 w-auto fill-current text-white " />
        <hr>
    </a>
  <div class="text-center">
  <img  src="{{asset(Auth::user()->image)}}" alt="user_photo" class=" h-28 w-auto ml-10 mt-8 rounded-xl">
  <span class="text-gray-900 font-serif font-bold">{{ Auth::user()->nom_prenom }}</span>
  </div>
    </div>
    <div class="">
    <button type="button" @click="open=!open" class="md:hidden inline-flex p-1 items-center justifiy-center rounded-md text-white hover:bg-blue-200 focus:outline-none mb-20 ml-8">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" block w-6 h-6 ">
     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
    </button>
    </div>

</div>

<!--nav links-->
<nav class="mt-12">


<div class="overflow-y-auto py-4  ">
<ul class="space-y-2">
<li>
<a href="{{route('moniteur.dashboard')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" /></svg>

<span class="ml-3">Profil</span>
</a>
</li>
<li>

<li>
<a href="{{url('/moniteur/calendrer')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
  </svg>


<span class="flex-1 ml-3 whitespace-nowrap">Calendrer</span>
</a>
</li>
<button type="button" class="flex items-center p-2 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600   " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
  </svg>


  <span class="flex-1 ml-2 text-left whitespace-nowrap " sidebar-toggle-item>Consuler</span>
  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
</button>
<ul id="dropdown-example" class="hidden py-2 space-y-2">
  <li>

     <a href="{{route('moniteur.l_eleves')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" /></svg>

     liste des élèves</a>
  </li>

  <li>
    <a href="{{url('/moniteur/liste des group')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" /></svg>

    liste des groups</a>
 </li>

</ul>
</li>

<li>
<a href="{{route('moniteur.cours')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>

<span class="flex-1 ml-3 whitespace-nowrap">Cours</span>
</a>
</li>


<li class="flex ">
    <a href="{{route('moniteur.logout')}}" class="flex items-center p-2 text-base font-normal text-primary rounded-lg  hover:bg-blue-600 mt-10 bg-white ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" /></svg>

       <span class="flex-1 ml-5 whitespace-nowrap ">Se déconnecter</span>

    </a>
 </li>


</ul>
</div>



</nav>
