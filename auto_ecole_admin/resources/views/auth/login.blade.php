<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Admin</title>

</head>
<body class="" style=" font-family: Nunito Sans;" >
    <div class="container-fluid vh-100 ">
        <div class="row   d-flex align-items-center justify-content-center  ">
            <div class="col-md rounded-end my-2 ">
              <div class="  text-center">
                <img src="{{asset('assets/img/logoauto.png')}}" class="img-fluid w-50 mt-3 " alt="logo">
                <img src="{{asset('assets/img/pngegg (15).png')}}" class="img-fluid w-75 " alt="image-moniteur">
              </div>


            </div>
            <div class="col-md container-fluid my-2 ">
                         <div class=" d-flex justify-content-center">

                            <img src="{{asset('assets/img/login.png')}}"
                            class="img-fluid w-25 py-4 " alt="Phone image">

                         </div>


                          <form method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="text-center">
                              <div class="form-outline ">
                                <input id="email" type="text" class="  border-0 border-bottom p-3" name="user_name" value="" required autocomplete="user_name" autofocus placeholder="nom d'utlisateur" size="50">

                            </div>
                            <span class="text-danger">
                                @error('user_name')
                                {{$message}}
                                @enderror
                                </span>
                            <div class="form-outline mb-4">

                                <input id="password" type="password" class=" border-bottom border-0 p-3 my-3 " name="password" required autocomplete="current-password" size="50" placeholder="mot de passe">
                            </div>
                            @error('password')
                                {{$message}}
                                @enderror
                                </span>
                            <div class="text-center ">
                            <button type="submit" class="btn btn-primary mx-5 ">Connexion</button>
                       

                        </div>
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
</body>
</html>
