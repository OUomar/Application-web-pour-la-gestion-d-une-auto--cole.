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
    <div class="w-full  max-w-xxl h-96  rounded-lg  mx-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container font-serif">
                        <br>  <p class="text-center text-2xl  "> Les Informations : </p>


                        <hr class="my-2">

                        <div class="row">
                        <div class="col my-3">
                        <div class="card drop-shadow-xl">
                        <div class="card-body">

                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Type<span class="text-danger">*</span> :</label>
                                <div >
                                    <input disabled type= "text" name="type" id="type"  value="{{$vehicule->type}}" class="form-control my-2  " placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Marque <span class="text-danger">*</span> :</label>
                                <div >
                                    <input disabled type="text" name="marque" id="marque"  value="{{$vehicule->marque}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Matricule <span class="text-danger">*</span> :</label>
                                <div >
                                    <input disabled type="text" name="matricule" id="matricule"  value="{{$vehicule->matricule}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Date de création <span class="text-danger">*</span> :</label>
                                <div >
                                    <input disabled type="text" name="matricule" id="matricule"  value="{{$vehicule->created_at}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Date de modification <span class="text-danger">*</span> :</label>
                                <div >
                                    <input disabled type="text" name="matricule" id="matricule"  value="{{$vehicule->updated_at}}" class="form-control my-2" placeholder="" required/>
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


