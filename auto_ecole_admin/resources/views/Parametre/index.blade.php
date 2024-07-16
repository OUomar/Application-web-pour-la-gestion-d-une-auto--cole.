@extends('layouts.pageprincipale')
@section('title')
parametre
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

<div class="container my-5 ">
    <div>

        <div class="bg-white relative shadow rounded-lg my-5  ">
            <div class="flex justify-center ">
                    <img src="{{asset('assets/img/login.png')}}" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
            </div>

            <div class="mt-16">
                <h1 class="font-bold text-center text-3xl text-gray-900">{{Auth::user()->Nom_prenom}}</h1>
                <p class="text-center text-sm text-gray-400 font-medium ">{{Auth::user()->email}}</p>
                <p>
                    <span>

                    </span>
                </p>
                <div class="my-5 px-6">
                    <a href="#" class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-1 py-1 bg-blue-600 hover:text-white"></a>
                </div>
                <div class="border-b border-gray-300"></div>
                <div class="w-full">
                    <div class="card">
                        <div class="card-content">

                          <div class="card-body">
                              <form action="{{url('admin/parametre',Auth::user()->id)}}" method="POST">
                                  @method('PUT')
                                  @csrf
                                  <div class=" text-center">
                                      <div class="col-md">
                                          <input id="type" type="text" name="user_name" placeholder="Nom d'utlisateur" class="border-bottom border-0 p-2 mb-3 mx-4 " value="{{Auth::user()->user_name}}" size="30"  required>
                                          <input type="text" name="Nom_prenom"  placeholder="Nom & Prenom" class="border-bottom border-0 p-2 mb-3 mx-4" value="{{Auth::user()->Nom_prenom}}" size="30"  required>
                                          <input type="password" name="password"  placeholder=" Noveau Mot de Passe" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  required>
                                          <input type="password" name="password"  placeholder=" Conferme le mot de passe" class="border-bottom border-0 p-2 mb-3 mx-4" size="30"  required>
                                      </div>
                                  </div>
                          </div>
                          <div class="card-footer text-center">
                            <input type="submit" class=" btn btn-primary bg-blue-500 " value="Modifier">
                          </div>
                      </form>
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



