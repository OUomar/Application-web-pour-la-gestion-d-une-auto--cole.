<div class=" flex content-center ">
                    <div class=" ml-4">
                        <a href="">
                        <x-application-logo class=" h-16 w-auto fill-current text-white " />
                        <hr>
                    </a>
                  <div class="text-center">
                  <img  src="{{asset(Auth::user()->image)}}" alt="user_photo" class=" h-28 w-auto ml-10 mt-8 rounded-xl ">
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
            <a href="{{url('/élève/Profil')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" /></svg>

               <span class="ml-3">Profil</span>
            </a>
         </li>
         <li>
            <a href="{{route('S_théorique')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg>
               <span class="ml-3">Empois de temps</span>
            </a>
         </li>

         <li>
            <a href="{{route('cours')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Cours</span>
            </a>
         </li>
         <li>
            <a href="{{route('contact')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" /></svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Contact</span>
            </a>
         </li>
         <li class="flex ">
            <a href="{{route('logout')}}" class="flex items-center p-2 text-base font-normal text-primary rounded-lg  hover:bg-blue-600 mt-10 bg-white ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" /></svg>

               <span class="flex-1 ml-5 whitespace-nowrap ">Se déconnecter</span>

            </a>
         </li>

      </ul>
   </div>

                </nav>
