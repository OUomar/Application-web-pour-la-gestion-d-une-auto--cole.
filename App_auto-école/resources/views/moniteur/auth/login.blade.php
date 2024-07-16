<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>login moniteur</title>
</head>
<body class="scrollbar-thumb-blue-500 scrollbar-track-gray-200">
<div class="container-fluid ">
        <div class="row align-items-center justify-content-center vh-100 ">
            <div class="col-lg bg-primary rounded-end rounded-start ">
                <div class="row d-flex justify-content-center  mt-1" >
                        <img  class=" img-fluid w-50 pt-1 " src="{{asset('assets/img/logoblanche.png')}}" alt="">
                        <img  class="img-fluid " src="{{asset('assets/img/imglogin.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg m-5  ">
                         <div class=" d-flex justify-content-center">

                            <img src="{{asset('assets/img/loginM.svg')}}"
                            class="img-fluid w-25 py-4 " alt="Phone image">
                         </div>
                          <form method="POST" action="{{route('moniteur.login')}}">
                            @csrf
                            <div class="text-center">
                              <div class="form-outline ">
                                <input id="user_name" type="text" class="  border-0 border-bottom p-3" name="user_name" value="" required autocomplete="user_name" autofocus placeholder="nom d'utlisateur" size="50">

                            </div>
                            <span class="text-danger">
                                @error('name')
                                {{$message}}
                                @enderror
                                </span>

                            <div class="form-outline mb-4">

                                <input id="password" type="password" class=" border-bottom border-0 p-3 my-3 " name="password" required autocomplete="current-password" size="50" placeholder="mot de passe">
                            </div>
                            <span class="text-danger">
                                @error('password')
                                {{$message}}
                                @enderror
                                </span>
                            <div class="text-center ">
                            <button type="submit" class="btn btn-primary mx-3 ">Connexion</button>
                            <button type="submit" class="btn btn-primary mx-3 ">Annuler</button>
                        </div>

                        <a class=" d-flex justify-content-center mt-3" href="{{route('password.request')}}"> Mot de passe oublié ? </a>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
</body>
</html>
