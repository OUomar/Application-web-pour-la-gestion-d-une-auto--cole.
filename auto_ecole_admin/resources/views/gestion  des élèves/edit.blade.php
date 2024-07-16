@extends('layouts.pageprincipale')
@section('title')
Modifier élève
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
                    <div class="content d-flex flex-column flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container-fluid" >

                      <div class="card">
                      <div class="card-header">
                      <div class="card-title">
                        <h3 class="card-label">Modifier</h3>
                      </div>
                      <div class="card-toolbar">

                      </div>
                      </div>
                      <form action="{{ url('admin/eleve' ,$eleve->id) }}" method="post" enctype="multipart/form-data" >
                        @method('PUT')
                        @csrf


                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card-body">
                          <div class="mb-15">

                            <input type="hidden" name="id" id="id" value="" id="id" />
                              <div class="form-group row my-3">
                                  <label class="col-lg-3 col-form-label text-right">Nom & prénom <span class="text-danger">*</span> :</label>
                                  <div class="col-lg-6">
                                      <input type="text" name="nom_prenom" id="name"  value="{{$eleve->nom_prenom}}" class="form-control" placeholder="" required/>
                                  </div>
                              </div>
                              <div class="form-group row my-3">
                                <label class="col-lg-3 col-form-label text-right ">Adresse  :</label>
                                <div class="col-lg-6">
                                    <input type="text" name="adresse" id="name"  value="{{$eleve->adresse}}" class="form-control" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-lg-3 col-form-label text-right">Tell  :</label>
                                <div class="col-lg-6">
                                    <input type="text" name="N_telephone" id="name"  value="{{$eleve->N_telephone}}" class="form-control" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-lg-3 col-form-label text-right">Date de naissance :</label>
                                <div class="col-lg-6">
                                    <input type="text" name="date_naissance" id="name"  value="{{$eleve->date_naissance}}" class="form-control" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label class="col-lg-3 col-form-label text-right">Groupe  :</label>
                                <select name="name_groupe" class=" form-select-lg mb-3 border-bottom border-0 p-2 mb-3 ml-4 w-25 text-sm"  aria-label=".form-select-lg example">
                                    @foreach ($groupe as $item)
                                    <option value="{{$item->name_groupe}}">{{$item->name_groupe}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row my-3">
                            <label class="col-lg-3 col-form-label text-right">Permis :</label>
                            <select name="Permis" value="{{$eleve->Permis}}"class=" form-select-lg mb-3 border-bottom border-0 p-2 mb-3 ml-4 w-25 text-sm" aria-label=".form-select-lg example">
                         
                         <option >Permis A</option>
                         <option >Permis B</option>
                         <option >Permis EB</option>
                         <option >Permis C</option>
                         <option >Permis EC</option>
                         <option >Permis D</option>
                        
                       </select>
                        </div>
                              <div class="form-group row my-3">
                                  <label class="col-lg-3 col-form-label text-right">Email <span class="text-danger">*</span> :</label>
                                  <div class="col-lg-6">
                                      <input type="text" name="email"  id="email"  value="{{$eleve->email}}"class="form-control" placeholder="" required/>
                                  </div>
                              </div>

                              <div class="form-group row my-3">
                                  <label class="col-lg-3 col-form-label text-right">Mot de passe <span class="text-danger">*</span> :</label>
                                  <div class="col-lg-6">
                                      <input type="password" name="password"  id="password" value="" class="form-control" placeholder="" required/>
                                  </div>
                              </div>
                              <div class="form-group row my-3">
                                <label class="col-lg-3 col-form-label text-right">Image :</label>
                                <div class="col-lg-6">
                                    <input type="file" name="image"  id="image" value="" class="form-control" placeholder="" required/>
                                </div>
                            </div>

                              <br>

                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="row">
                              <div class="col-lg-3"></div>
                              <div class="col-lg-6">
                                <button class="btn btn-success">Modifier</button>
                                  <a href="{{url('admin/eleve')}}" class="btn btn-secondary">Annuler</a>
                              </div>
                          </div>
                        </div>
                        </form>
                      </div>
                      </div>
                      <!--end::Container-->
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection

