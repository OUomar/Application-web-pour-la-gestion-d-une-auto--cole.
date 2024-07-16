<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>login élève</title>

</head>
<body  class="scrollbar-thumb-blue-500 scrollbar-track-gray-200">
    <div class="container-fluid ">
        <div class="row align-items-center justify-content-center vh-100 ">
            <div class="col-lg bg-primary rounded-end rounded-start ">
                <div class="row d-flex justify-content-center mt-sm-5" >
                        <img  class=" img-fluid w-50 pt-5 " src="{{asset('assets/img/logoblanche.png')}}" alt="">
                        <img  class="img-fluid m-4 " src="{{asset('assets/img/loginpage.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg m-5  ">

                    <div>
                        <img  class=" w-25 mb-2  rounded mx-auto d-block d-sm-block img-fluid" src="{{asset('assets/img/login.png')}}" alt="">
                  </div>
                  <div class="pb-2 text-center">
                    <span class=" lead fw-bolder">bienvenue chez nous </span>
                  </div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                  <div class="text-center py-3 position-relative">
                    <div class="">
                    <input type="text" name="user_name" placeholder="nom d'utilisateur" class="border-bottom border-0 p-3 mb-2" size="50">
                    </div>
                    <span class="text-danger bg-red-200">
                    @error('user_name')
                    {{$message}}
                    @enderror
                    </span>

                    <div class="">
                    <input type="password" name="password" placeholder="Mot de passe" class="border-bottom border-0 mb-3 p-3" size="50">
                    </div>
                    <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                    </span>

                    <div class="mt-3">
                    <button type="submit" class="btn btn-primary mx-3"><span class="lead">Connexion</span></button>
                    <button type="submit" class=" btn btn-primary  mx-3 "><a href="{{route('register')}}" class=" text-decoration-none text-white lead" >S'inscrire</a> <i class="bi bi-arrow-up-right-circle fs-5"></i></button><br>
                    <div class="mt-3">
                        <a href="{{route('password.request')}}" class="my-5"> Mot de Passe oublier ?</a>
                    </div>
                    </div>
                  </div>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
