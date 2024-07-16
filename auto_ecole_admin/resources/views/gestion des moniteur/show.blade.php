@extends('layouts.pageprincipale')
@section('title')
Moniteur
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
                        <div class="main-body">
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{asset($moniteur->image)}}" alt="Admin" class=" img-fluid rounded-circle" width="150">
                                        <div class="mt-3">
                                          <h4>{{$moniteur->nom_prenom}}</h4>
                                          <p class=" text-gray-300 mb-1">{{$moniteur->email}}</p>
                                          <p class="text-muted font-size-sm">{{$moniteur->adresse}}</p>
                                          <button class="btn btn-success"><a href="{{url('admin/moniteur')}}">Annuler</a> </button>
                                          <button class="btn btn-danger">  <a href="{{url('admin/moniteur/'. $moniteur->id. '/edit')}}">Modifier</a> </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <div class="col-md-8">
                                  <div class="card mb-3">
                                    <div class="card-body">
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0  text-indigo-400">Nom & Prenom</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$moniteur->nom_prenom}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Date de naissance</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$moniteur->date_naissance}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row  my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Email</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$moniteur->email}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Mot de passe</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            **********************
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Phone</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                          (212){{$moniteur->N_telephone}}
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Address</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$moniteur->adresse}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Vehicule</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$vehicule->type}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0 text-indigo-400">Matricule</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$vehicule->matricule}}
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
        </div>
    </div>
@endsection


