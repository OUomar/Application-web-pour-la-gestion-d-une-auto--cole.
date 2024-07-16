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
                    <div class="container font-serif">
                        <br>  <p class="text-center text-2xl  ">Modifiers Les Information de Moniteur: </p>
                        <div class=" flex justify-center  ">
                            <div>
                            <img src="{{asset($moniteur->image)}}" alt="Admin" class=" img-fluid rounded-circle " width="80"></div>

                        </div>
                        <div class=" text-center"><span class=" my-2  text-danger">{{$moniteur->nom_prenom}}</span></div>
                        <hr class="my-2">

                        <div class="row">
                        <div class="col-md my-3">
                        <div class="card drop-shadow-xl">
                        <div class="card-body">
                            <form action="{{ url('admin/moniteur' ,$moniteur->id) }}" method="post" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Nom & prénom <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="nom_prenom" id="name"  value="{{$moniteur->nom_prenom}}" class="form-control my-2 bg-white " placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Nom de utilisateur <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="user_name" id="name"  value="{{$moniteur->user_name}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Date de naissance <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="date_naissance" id="name"  value="{{$moniteur->date_naissance}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class="text-right  text-gray-400 text-bold">CIN <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="cin" id="name"  value="{{$moniteur->cin}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Addresse <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="adresse" id="name"  value="{{ $moniteur->adresse}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>

                        </div>
                        </div>
                            </div>

                            <div class="col-md my-3">
                                <div class="card drop-shadow-xl">
                                <div class="card-body">
                                    <input type="hidden" name="id" id="id" value="" id="id" />
                                    <div class="form-group text-center my-2 ">
                                        <label class=" text-right text-gray-400 text-bold">Email <span class="text-danger">*</span> :</label>
                                        <div >
                                            <input type="text" name="email" id="name"  value="{{$moniteur->email}}" class="form-control my-2" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group text-center my-2 ">
                                        <label class=" text-right text-gray-400 text-bold">Mot de passe <span class="text-danger">*</span> :</label>
                                        <div >
                                            <input type="text" name="password" id="name"  value="************" class="form-control my-2" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group text-center my-2 ">
                                        <label class=" text-right text-gray-400 text-bold">Tell <span class="text-danger">*</span> :</label>
                                        <div >
                                            <input type="text" name="N_telephone" id="name"  value="{{$moniteur->N_telephone}}" class="form-control my-2" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group text-center my-2 ">
                                        <label class=" text-right text-gray-400 text-bold">Image <span class="text-danger">*</span> :</label>
                                        <div >
                                            <input type="file" name="image" id="image"  value="" class="form-control my-2" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group text-center my-2 ">
                                        <label class=" text-right text-gray-400 text-bold">Vehicule <span class="text-danger">*</span> :</label>
                                        <div >
                                            <select name="id_vehicule" class="form-select form-select-lg "  aria-label=".form-select-lg example">
                                                  <option selected value="{{$vehicule->id}}">{{$vehicule->type}}</option>
                                                @foreach ($vehicules as $item)
                                                <option value="{{$item->id}}">{{$item->type}}</option>
                                                @endforeach

                                              </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-6">
                                             <button class="btn btn-success">Modifier</button>
                                                <a href="{{url('admin/moniteur')}}" class="btn btn-secondary mx-2">Annuler</a>
                                            </div>
                                        </div>
                                      </div>
                                </form>
                        </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
