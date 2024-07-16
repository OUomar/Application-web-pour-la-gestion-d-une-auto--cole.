<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   
    <title>Mot de passe oublier</title>
</head>
<body class="bg-light">
    <div class="container vh-100 d-flex align-items-center justify-content-center">
       <div class=" card-toolbar  vh-80 p-2 shadow bg-white rounded">
           <div class="card-body text-center py-4 text-center-md">
                <img src="{{asset('assets/img/pwd_oublier.png')}}" alt="" class="img-fluid w-25 ">
                <div class="">
            @if($errors)
                @foreach($errors->all() as $errors)
                <li class="text-danger">  {{$errors}} </li>
                @endforeach
            @endif
                <form method="POST" action="" >
                 @csrf
                 <input type="text" name="nom_prenom" placeholder="saisir votre Nom d'utilisateur" class="border-bottom border-0 p-3 my-3" size="30" ><br>
                 <input type="text" name="n_tele"  placeholder="saisir le N° de téléphone" class="border-bottom border-0 p-3 my-3" size="30"><br>
                 <button type="submit" class="btn btn-primary mx-4 "><span class="p-2 lead fw-bold ">Envoyer</span></button>
                </form>
                </div>
              
           </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
