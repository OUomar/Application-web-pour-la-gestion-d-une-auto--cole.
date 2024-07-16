<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>créer un compte</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="row align-items-center align-content-center">
            <div class="col-md ">
                <div class="text-center">
                    <img src="{{asset('/assets/img/inscrireimg.PNG')}}" alt="" class="img-fluid mt-4 rounded-circle mw-100 ">
                </div>     
            </div>
            <div class="col-md ">
                <div class="text-center mt-4 ">
                    <h2>Créer un compte</h2>
                    <span class="lead fs-3">Vous avez déjà un compte ?</span>
                    <a href="{{route('login')}}" class="lead fs-3">S'identifier</a>
                </div>

           
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class=" text-center">
                        <div class="col-md">
                            <input id="nom_prenom" type="text" name="nom_prenom" placeholder="Nom & Prénom" class="border-bottom border-0 p-3 mb-3 mx-4 " size="30"  values="{{old('nom_prenom')}}">
                            <span class="text-danger">
                    @error('nom_prenom')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="text" name="user_name"  placeholder="nom d'utilisateur" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('nom_d\'utilisateur')}}">
                            <span class="text-danger">
                    @error('user_name')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="text" name="cin"  placeholder="CIN" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('cin')}}">
                            <span class="text-danger">
                    @error('cin')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="email" name="email"  placeholder="Email" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('email')}}">
                            <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="text" name="add"  placeholder="adresse" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('add')}}">
                            <span class="text-danger">
                    @error('add')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="text" name="n_tele"  placeholder="N° Téléphone" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('n_tele')}}">
                            <span class="text-danger">
                    @error('n_tele')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="password" name="password"  placeholder="Mot de passe" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('password')}}">
                            <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                    </span>
                            <input type="password" name="c_password"  placeholder="confirmer le Mot de passe" class="border-bottom border-0 p-3 mb-3 mx-4" size="30"  values="{{old('c_password')}}">
                            <span class="text-danger">
                    @error('c_password')
                    {{$message}}
                    @enderror
                    </span>
                        </div>
                        <div class="col-md">
                            <label class="text-center lead"> Date de naissance</label>
                            <input type="date" name="date_n"   class="border-bottom border-0 p-3 mb-3 mx-4" size="50" value="{{old('date_n')}}">
                            <span class="text-danger">
                    @error('date_n')
                    {{$message}}
                    @enderror
                    </span>
                        </div>
                      
                    </div>
                        
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3"><span class="lead">Valider</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>