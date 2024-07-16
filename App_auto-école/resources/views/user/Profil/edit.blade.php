@extends('user.layouts.Principale')
@section('title')
Profil
@endsection
@section('css')
@endsection
@section('script')
<script type="text/javascript" >
    // L'image img#image
    var image = document.getElementById("image");

    // La fonction previewPicture
    var previewPicture  = function (e) {

        // e.files contient un objet FileList
        const [picture] = e.files

        // "picture" est un objet File
        if (picture) {
            // On change l'URL de l'image
            image.src = URL.createObjectURL(picture)
        }
    }
</script>
@endsection
@section('content')
<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="container font-serif">
                <form action="{{url('/élève/Profil/'.Auth::user()->id)}}" method="post" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                <br>  <p class="text-center text-2xl  ">Modifiers Les Informations: </p>
                <div class=" flex justify-center  ">
                    <div>
                    <img  src="{{asset(Auth::user()->image)}}" alt="Admin"  name="image"  id="image" class=" img-fluid rounded-circle " width="120"></div>

                </div>
                <div class=" text-center">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center   ">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                   <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                   </svg>
                  <input id="dropzone-file"  name="image"onchange="previewPicture(this)" type="file" class="hidden" />
                  </label>
                     </div>
                <div class=" text-center"><span class=" my-2  text-danger">{{Auth::user()->nom_prenom}}</span></div>
                <hr class="my-2">

                <div class="row">
                <div class="col my-3">
                <div class="card drop-shadow-xl">
                <div class="card-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group text-center my-2 ">
                        <label class=" text-right text-gray-400 text-bold">Nom & prénom <span class="text-danger">*</span> :</label>
                        <div >
                            <input type="text" name="nom_prenom" id="name"  value="{{Auth::user()->nom_prenom}}" class="form-control my-2 bg-white " placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group text-center my-2 ">
                        <label class=" text-right text-gray-400 text-bold">Nom de utilisateur <span class="text-danger">*</span> :</label>
                        <div >
                            <input type="text" name="userr_name" id="name"  value="{{Auth::user()->user_name}}" class="form-control my-2" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group text-center my-2 ">
                        <label class=" text-right text-gray-400 text-bold">Date de naissance <span class="text-danger">*</span> :</label>
                        <div >
                            <input type="text" name="date_naissance" id="name"  value="{{Auth::user()->date_naissance}}" class="form-control my-2" placeholder="" required/>
                        </div>
                    </div>
                    <div class="form-group text-center my-2 ">
                        <label class="text-right  text-gray-400 text-bold">CIN <span class="text-danger">*</span> :</label>
                        <div >
                            <input type="text" name="cin" id="name"  value="{{Auth::user()->cin}}" class="form-control my-2" placeholder="" required/>
                        </div>
                    </div>


                </div>
                </div>
                    </div>

                    <div class="col my-3">
                        <div class="card drop-shadow-xl">
                        <div class="card-body">
                            <input type="hidden" name="id" id="id" value="" id="id" />
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Email <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="email" id="name"  value="{{Auth::user()->email}}" class="form-control my-2" placeholder="" required/>
                                </div>
                            </div>
                            <div class="form-group text-center my-2 ">
                        <label class=" text-right text-gray-400 text-bold">Addresse <span class="text-danger">*</span> :</label>
                        <div >
                            <input type="text" name="adresse" id="name"  value="{{ Auth::user()->adresse}}" class="form-control my-2" placeholder="" required/>
                        </div>
                    </div>
                            <div class="form-group text-center my-2 ">
                                <label class=" text-right text-gray-400 text-bold">Tell <span class="text-danger">*</span> :</label>
                                <div >
                                    <input type="text" name="N_telephone" id="name"  value="{{Auth::user()->N_telephone}}" class="form-control my-2" placeholder="" required/>
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
                                        <a href="{{url('/élève/Profil')}}" class="btn btn-secondary mx-2">Annuler</a>
                                    </div>
                                </div>
                              </div>

                </div>
            </form>
                </div>
        </div>
    </div>
</div>
@stop
