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
                   <div class=" card bg-white">
                    <div class=" card-body">
                        <table class="min-w-full text-center" id="dataTable">

                            <thead class="border-b bg-gray-50 text-center">
                              <tr>
                                <th scope="col" class="text-sm font-serif text-gray-900 px-6 py-4">
                                N°
                                </th>
                                <th  class="text-sm font-serif text-gray-900 px-6 py-4">
                                Nom & Prenom
                                </th>
                                <th  class="text-sm font-serif text-gray-900 px-6 py-4">
                                Groupe
                                </th>

                              </tr>
                            </thead class="border-b">
                            <tbody>
                                @foreach ($eleve as $item )
                              <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-serif text-gray-900"> {{ $loop->iteration }}</td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap pl-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset($item->image)}}" alt=""style="width: 45px; height: 45px"class="rounded-circle" />
                                        <div class="ms-3">
                                          <p class="fw-bold mb-1">{{$item->nom_prenom}}</p>
                                          <p class="text-muted mb-0">{{$item->email}}</p>
                                        </div>
                                      </div>



                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$item->name_groupe}}</td>

                              </tr class="bg-white border-b">

                            </tbody>
                            @endforeach
                          </table>

                    </div>
                   </div>
            </div>
        </div>
    </div>
    @endsection
