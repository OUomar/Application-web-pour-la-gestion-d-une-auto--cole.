@extends('layouts.pageprincipale')
@section('title')
Groupe
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg   mx-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="card-title text-center text-2xl   text-emerald-500 font-serif ">
                            <h4>Les information sur  {{$groupe->name_groupe}}</h4>
                        </div>
                        <hr class="my-3">
                        <div class="row ">

                            <div class="col-md my-4">
                                <div class="">
                                    <img class=" img-fluid" src="{{asset('assets/img/concept-illustration-therapie-groupe_52683-45727.webp')}}" alt="">
                                </div>
                            </div>
                          <div class="col-md my-4">
                           <div class="card drop-shadow-xl">

                           <div class="card-body flex flex-col space-y-4 ">
                            <div>
                                <label class=" text-bold  text-lg">Nom de groupe : </label><br>
                                <label class="mx-5 text-gray-300 my-2" for="">{{$groupe->name_groupe}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Date de création : </label><br>
                                <label class="mx-5 text-gray-300 my-2" for="">{{$groupe->created_at}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Date de modification : </label><br>
                                <label class="mx-5 text-gray-300 my-2" for="">{{$groupe->updated_at}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Nom de moniteur : </label><br>
                                <label class="mx-5 text-gray-300 my-2" for="">{{$moniteur->nom_prenom}}</label>

                            </div>

                         <div>
                             <label class=" text-bold text-lg" for="">Groupe des élèves concernès </label>
                              @foreach ($eleve as $eleve)
                            <li class="mx-5 text-gray-300">{{$eleve->nom_prenom}}</li>
                           @endforeach
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
@endsection


