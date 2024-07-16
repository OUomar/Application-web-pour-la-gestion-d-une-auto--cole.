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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-6 bg-white border-b border-gray-200  " >
                    <div class="container  ">
                        <form action="{{ url('admin/groupe' ,$groupe->id) }}" method="post" enctype="multipart/form-data" >
                            @method('PUT')
                            @csrf
                        <div class="card-title text-center  text-2xl text-gray-400 font-serif ">
                            <h4> Modifier les informations </h4>
                        </div>
                        <div class="row ">

                          <div class="col my-4">
                           <div class="card drop-shadow-xl">

                           <div class="card-body flex flex-col space-y-4 ">
                            <div class=" text-center">
                                <label class=" text-bold text-gray-300">Nom de groupe: </label><br>
                                <input type="text" class="border-bottom border-0 p-2 mb-3 mx-4 "  size="70" value="{{$groupe->name_groupe}}" name="name_groupe" required>


                            </div>

                            <div class=" text-center">
                                <label class=" text-bold text-gray-300" for="">Nom de moniteur: </label><br>
                                <select name="id_moniteur"  class=" form-select form-select-lg "  aria-label=".form-select-lg example">

                                    @foreach ($moniteur as $item)
                                    <option value="{{$item->id}}">{{$item->nom_prenom}}</option>
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
                                    <a href="{{url('admin/groupe')}}" class="btn btn-secondary mx-2">Annuler</a>
                                </div>
                            </div>
                          </div>
                        </form>
                </div>

                </div>
            </div>
        </div>
    </div>
@endsection


