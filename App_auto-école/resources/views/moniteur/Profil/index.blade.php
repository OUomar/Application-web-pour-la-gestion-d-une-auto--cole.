@extends('moniteur.layouts.Principale')
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
                    <section class="h-100 ">
                        <div class="container  my-2 h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-9 ">
                              <div class="card">
                                <div class="rounded-top text-white  bg-gray-100" >
                                  <div class=" flex justify-center  " >
                                   <div>
                                    <img src="{{asset(Auth::user()->image)}}"
                                    alt="Generic placeholder image " class="  img-fluid img-thumbnail mt-4 mb-2" width="150">
                                   </div>

                                  </div>
                                  <div class="  my-2 text-xl text-center text-bold text-black" >
                                    <h3 >{{Auth::user()->nom_prenom}}</h3>

                                  </div>
                                  <div class=" d-flex justify-center">
                                    <div>  <a href="{{route('edit.profile.moniteur',Auth::user()->id)}}" class="d-flex btn  bg-dark text-white mx-2 my-2">Modifier<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>
                                      </a></div>
                                </div>
                                </div>

                                <div class="card-body p-4  text-center">
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Nom de utilisateur: </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->user_name}}" disabled class="form-control my-2 bg-white" placeholder="" required/>

                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Nom & Prenom : </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->nom_prenom}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">CIN : </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->cin}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Adresse: </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->adresse}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Date de naissance : </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->date_naissance}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Email : </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->email}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">N° télèphone : </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->N_telephone}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Date de création: </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->created_at}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">La derniere Modification: </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{Auth::user()->updated_at}}" disabled class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
    @endsection
