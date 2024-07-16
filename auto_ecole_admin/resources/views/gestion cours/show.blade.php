@extends('layouts.pageprincipale')
@section('title')
Cours
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
                    <div class="container  ">
                        <div class="card-title text-center  text-gray-400 font-serif ">
                            <h4>Les information sur cour {{$cours->type}}</h4>
                        </div>
                        <div class="row ">

                          <div class="col my-4">
                           <div class="card drop-shadow-xl">

                           <div class="card-body flex flex-col space-y-4 ">
                            <div>
                                <label class=" text-bold text-lg">Date de debut : </label><br>
                                <label class="mx-5 text-gray-400 my-2" for="">{{$cours->dateCours}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Date de création : </label><br>
                                <label class="mx-5 text-gray-400 my-2" for="">{{$cours->created_at}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Date de modification : </label><br>
                                <label class="mx-5 text-gray-400 my-2" for="">{{$cours->updated_at}}</label>

                            </div>
                            <div>
                                <label class=" text-bold text-lg" for="">Type de cours : </label><br>
                                <label class="mx-5 text-gray-400 my-2" for="">{{$cours->type}}</label>

                            </div>



                           </div>
                           </div>
                          </div>
                          <div class="col my-4">
                            <div class="card drop-shadow-xl">
                            <div class="card-body flex flex-col space-y-4 ">
                                <div>
                                    <label class=" text-bold text-lg" for="">Nombre d'heure : </label><br>
                                    <label class="mx-5 text-gray-400 my-2" for="">{{$cours->nbreCours}}</label>

                                </div>
                             <div>
                                 <label class=" text-bold text-lg">Nom de groupe: </label><br>
                                 <label class="mx-5 text-gray-400" for="">{{$cours->name_groupe}}</label>

                             </div>
                             <div>
                                 <label class=" text-bold text-lg" for="">Groupe des élèves concernès </label>
                                  @foreach ($eleve as $eleve)
                                <li class="mx-5 text-gray-400">{{$eleve->nom_prenom}}</li>
                               @endforeach


                             </div>
                             <div>
                                 <label class=" text-bold text-lg" for="">Moniteur : </label>


                                 <label class="mx-5 text-gray-400" for="">{{$moniteur->nom_prenom }}</label>



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


