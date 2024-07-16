@extends('user.layouts.Principale')
@section('title')
Profil
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')

<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
        <div class="p-6 bg-white border-b border-gray-200">
        <div class="container">
            <div class="main-body">
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{asset(Auth::user()->image)}}" alt="Admin" class=" img-fluid rounded-circle" width="150">
                            <div class="mt-3">
                              <h4>{{Auth::user()->nom_prenom}}</h4>
                              <p class=" text-gray-300 mb-1">{{Auth::user()->email}}</p>
                              <p class="text-muted font-size-sm">{{Auth::user()->adresse}}</p>

                              <button class="btn btn-danger">  <a href="{{url('/élève/Profil/'. Auth::user()->id. '/edit')}}">Modifier</a> </button>
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
                              <h6 class="mb-0">Nom & Prenom</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->nom_prenom}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nom utilisateur</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->user_name}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Date de création</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->created_at}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Derniére modification</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->updated_at}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Date de naissance</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->date_naissance}}
                            </div>
                          </div>
                          <hr>
                          <div class="row  my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->email}}
                            </div>
                          </div>
                          <hr>
              
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                              {{Auth::user()->N_telephone}}
                            </div>
                          </div>
                          <hr>

                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->adresse}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Groupe</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->name_groupe}}
                            </div>
                          </div>
                          <hr>
                          <div class="row my-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Permis</h6>
                            </div>
                            <div class="col-sm-9  text-gray-300">
                                {{Auth::user()->Permis}}
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

