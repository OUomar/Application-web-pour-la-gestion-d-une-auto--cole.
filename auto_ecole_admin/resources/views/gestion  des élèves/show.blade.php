@extends('layouts.pageprincipale')
@section('title')
afficher élève
@endsection
@section('css')
@endsection
@section('script')
<script type="text/javascript">
    function activer(){

       var m= document.getElementById('active');
       m.innerHTML="Active";
       if (!document.getElementById('chek').checked){
        m.innerHTML="Désactive";
       }
    }
</script>
@endsection
@section('content')

<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg  mx-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="main-body">
                              <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <div class="card-body">
                                      <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{asset($eleve->image)}}" alt="Admin" class=" img-fluid rounded-circle" width="150">
                                        <div class="mt-3">
                                          <h4>{{$eleve->nom_prenom}}</h4>
                                          <p class=" text-gray-300 mb-1">{{$eleve->email}}</p>
                                          <p class="text-muted font-size-sm">{{$eleve->adresse}}</p>

                                          <button class="btn btn-success"><a href="{{url('admin/eleve')}}">Annuler</a> </button>
                                          <button class="btn btn-danger">  <a href="{{url('admin/eleve/'. $eleve->id. '/edit')}}">Modifier</a> </button>
                                        </div>
                                        <div class=" justify-center my-4">
                                            <label class="relative inline-flex items-center mb-5 cursor-pointer">
                                                <input type="checkbox"  id="chek" onclick="activer()" value="" class="sr-only peer">
                                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span id="active" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Désactive</span>
                                              </label>
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
                                            {{$eleve->nom_prenom}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Date de naissance</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$eleve->date_naissance}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row  my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$eleve->email}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Mot de passe</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            **********************
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                          (212){{$eleve->N_telephone}}
                                        </div>
                                      </div>
                                      <hr>

                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$eleve->adresse}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Permis</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$eleve->Permis}}
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row my-3">
                                        <div class="col-sm-3">
                                          <h6 class="mb-0">Groupe</h6>
                                        </div>
                                        <div class="col-sm-9  text-gray-300">
                                            {{$eleve->name_groupe}}
                                        </div>
                                      </div>
                                      <hr>
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

