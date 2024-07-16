<div class=" flex content-center ">
                    <div class=" ml-4">
                        <a href="">
                        <x-application-logo class=" h-16 w-auto fill-current text-white " />
                        <hr>
                    </a>
                  <div class="text-center">
                  <img  src="{{asset('assets/img/login.png')}}" alt="user_photo" class=" h-28 w-auto ml-10 mt-8 ">
                  <span class="text-gray-900 font-serif font-bold">{{ Auth::user()->Nom_prenom }}</span>
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
                <nav class="mt-12  ">


   <div class="overflow-y-auto py-4  ">
      <ul class="space-y-2">
         <li>
            <a href="{{route('dashboard')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
                <svg aria-hidden="true" class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>

               <span class="ml-3">Tableau de bord</span>
            </a>
         </li>
         <li>

         <li>
            <a href="{{route('getevent')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                  </svg>


               <span class="flex-1 ml-3 whitespace-nowrap">Calendrer</span>
            </a>
         </li>
            <button type="button" class="flex items-center p-2 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600   " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
                  </svg>




                  <span class="flex-1 ml-2 text-left whitespace-nowrap  " sidebar-toggle-item>Gérer</span>
                  <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
            <li>
                    <a href="{{url('admin/moniteur')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
            Moniteur</a>
                  </li>
                  <li>
                     <a href="{{url('admin/eleve')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
                     élèves</a>
                  </li>
                  <li>
                     <a href="{{url('admin/groupe')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
                    Groupes</a>
                  </li>
                  <li>
                    <a href="{{url('admin/vehiecule')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
                    Vehicules</a>
                 </li>
                 <li>
                    <a href="{{url('admin/cours')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
                    Cours</a>
                 </li>
                 <!-- <li>
                    <a href="{{route('G-compt')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
                    Comptes</a>
                 </li>
                 <li>
                    <a href="{{route('G-examen')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                          </svg>
            Examens</a>
               </li>

                  <li>
                <a href="{{route('G_facture')}}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-600  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle w-4 h-4 mr-2" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      </svg>
        Factures</a>
                 </li> -->
            </ul>



         </li>
         <li>
            <a href="{{url('admin/Permis')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Ajouter des Cours</span>
            </a>
         </li>

         <li>
            <a href="{{route('G-location')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                  </svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Location des vehicules</span>
            </a>
         </li>

         <li class="flex">
            <a href="{{route('logout')}}" class="flex items-center p-2 text-base font-normal text-white rounded-lg  hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" /></svg>

               <span class="flex-1 ml-3 whitespace-nowrap">Se déconnecter</span>

            </a>

         </li>

      </ul>
   </div>
</nav>
