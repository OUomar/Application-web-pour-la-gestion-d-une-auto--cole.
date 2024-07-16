@extends('layouts.pageprincipale')
@section('title')
Véhicules
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
                        <br>  <p class="text-center text-2xl  ">Modifier Les Informations : </p>


                        <hr class="my-2">

                        <div class="row">
                        <div class="col my-3">
                        <div class="card drop-shadow-xl">
                        <div class="card-body">
                            <form action="{{ url('admin/vehiecule' ,$vehicule->id) }}" method="post" enctype="multipart/form-data" >
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Type<span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="type" id="type"  value="{{$vehicule->type}}" class="form-control my-2 bg-white " placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Marque <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="marque" id="marque"  value="{{$vehicule->marque}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Matricule <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="matricule" id="matricule"  value="{{$vehicule->matricule}}" class="form-control my-2" placeholder="" required/>
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
                                                <a href="{{url('admin/vehiecule')}}" class="btn btn-secondary mx-2">Annuler</a>
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

