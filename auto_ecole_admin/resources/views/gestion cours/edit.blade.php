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
                        <form action="{{ url('admin/cours' ,$cours->id) }}" method="post" enctype="multipart/form-data" >
                            @method('PUT')
                            @csrf
                        <div class="card-title text-center  text-gray-400 font-serif ">
                            <h4> Modifier les information sur cour {{$cours->type}}</h4>
                        </div>
                        <div class="row ">

                          <div class="col my-4">
                           <div class="card drop-shadow-xl">

                           <div class="card-body flex flex-col space-y-4 ">
                            <div class=" text-center">
                                <label class=" text-bold text-gray-300">Type : </label><br>
                                <input type="text" class="border-bottom border-0 p-2 mb-3 mx-4 "  size="70" value="{{$cours->type}}" name="type" required>


                            </div>
                            <div class=" text-center">
                                <label class=" text-bold  text-gray-300">Date de cours : </label><br>
                                <input type="text" class="border-bottom border-0 p-2 mb-3 mx-4 "  size="70" value="{{$cours->dateCours}}" name=" dateCours" required>


                            </div>

                            <div class=" text-center">
                                <label class=" text-bold text-gray-300" for="">Nombre d'heure de cours: </label><br>
                                <input type="text" class="border-bottom border-0 p-2 mb-3 mx-4"  size="70" value="{{$cours->nbreCours}}" name="nbreCours" required>

                            </div>
                            <div class=" text-center">
                                <label class=" text-bold text-gray-300" for="">Nom de groupe: </label><br>
                                <select name="name_groupe"  class=" form-select form-select-lg "  aria-label=".form-select-lg example">

                                    @foreach ($groupe as $item)
                                    <option value="{{$item->name_groupe}}">{{$item->name_groupe}}</option>
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
                                    <a href="{{url('admin/cours')}}" class="btn btn-secondary mx-2">Annuler</a>
                                </div>
                            </div>
                          </div>
                        </form>
                </div>


            </div>
        </div>
    </div>
@endsection

