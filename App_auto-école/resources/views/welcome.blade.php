<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
    <title>Auto-école</title>
</head>
<body>
    <!--menu-->
    <div class="navbar navbar-expand-md  bg-dark navbar-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand ">
            <img  class=" img-fluid w-50" src="{{asset('assets/img/logoblue.png')}}" alt="">
            </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <div class="span navbar-toggler-icon"></div>
           </button>
            <div class="collapse navbar-collapse" id="mainmenu">
               <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#Home" class="nav-link text-white ">Home</a></li>
                <li class="nav-item"><a href="#services" class="nav-link text-white">Services</a></li>
                <li class="nav-item"><a href="#about" class="nav-link text-white" >About</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-white dropdown-toggle" data-bs-toggle="dropdown">Connexion</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('login')}}" class="dropdown-item " target="_blank">élève</a></li>
                        <li><a href="{{route('moniteur.login')}}" target="_blank"xclass="dropdown-item">Moniteur</a></li>
                    </ul>
                </li>
                
                
               </ul>
            </div>
        </div>
    </div>



    <!--Home-->

    <section id="Home" class=" text-light text-center text-sm-start py-5">
    <div class="container-xxl">
        <div class="d-flex  align-item-center justify-content-center mt-3">
            <div class=" col-md bg-light  pt-5 align-item-center justify-content-center ">
                <h1 class=" text-black text-center mt-5 pt-5 ">Auto-école <span class="text-danger">Cycle d'ingénieurs</span></h1>
                <h1 class=" text-black text-center "> مدرسة دورة الهندسة <span class="text-danger">لتعليم السياقة</span></h1>
                <div class="mt-4">
                <h3 class=" text-black text-center pt-4"> Omar <span class="text-danger"> OUKHOUYA</span></h3>
                <h5 class=" text-black text-center"> <i class="bi bi-caret-right-fill"></i> D132232356</h5>
                <h3 class=" text-black text-center pt-4">Khalid <span class="text-danger"> HADDOU</span></h3>
                <h5 class=" text-black text-center"> <i class="bi bi-caret-right-fill"></i> D133616443</h5>
                </div>
            </div>
           <img  class=" col-md bg-light d-none d-md-block img-fluid   " src="{{asset('assets/img/premierpage.png')}}" alt="">
        </div>
    </div>
</section>



<!--services-->
<section class="py-5" id="services">
    <h2 class="text-center mb-3">
        Services
    </h2>
    <div class="container">
        <div class="row text-center">
            <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                        <h2>Permis A</h2>
                    </div>
                   <img src="{{asset('assets/img/permiA.png')}}" alt="" class="card-img-top mt-2">
                    <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermisA" role="button" aria-expanded="false" aria-controls="PermisA">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermisA">
                            <div class="bg-dark p-2">
                       <p align="justify" class="p-2">Le permis A permet de conduire les véhicules suivantes : Moto, avec ou sans side-car, quelle que soit sa puissance. 3 roues d'une puissance supérieure à 15 kilowatts.</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                        <h2>Permis B</h2>
                    </div>
                   <img src="{{asset('assets/img/permiB.png')}}" alt="" class="card-img-top mt-2">
                   <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermisB" role="button" aria-expanded="false" aria-controls="PermisB">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermisB">
                            <div class="bg-dark p-2">
                           <p align="justify" class="p-2"> Le permis B permet de conduire une voiture ou une camionnette. Il permet aussi de conduire, sous conditions, un camping-car, une moto légère (scooter, moto 125) ou un tracteur.
                            </div></p>
                        </div>
                    </div>
                </div>
            </div>
               <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                    <h2>Permis EB</h2>
                    </div>
                  <img src="{{asset('assets/img/permiEB.png')}}" alt="" class="card-img-top">
                  <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermisEB" role="button" aria-expanded="false" aria-controls="PermisEB">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermisEB">
                            <div class="bg-dark p-2">
                            <p align="justify" class="p-2">Le permis BE permet de conduire une voiture attelée d'une remorque dont le PTAC : PTAC : Poids total autorisé en charge est supérieur à 750 kg sans dépasser 3 500 kg si la somme des PTAC : PTAC : Poids total autorisé en charge de l'ensemble (voiture + remorque) dépasse 4 250 kg.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                    <h2>Permis C</h2>
                    </div>
                  <img src="{{asset('assets/img/permiC.png')}}" alt="" class="card-img-top">
                  <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermisC" role="button" aria-expanded="false" aria-controls="PermisC">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermisC">
                            <div class="bg-dark p-2">
                            <p align="justify" class="p-2">Le permis C autorise la conduite des véhicules affectés au transport de marchandises ou de matériel dont le PTAC : PTAC : Poids total autorisé en charge est supérieur à 3,5 tonnes. Pour passer le permis C, il faut avoir au moins 21 ans et avoir le permis B. Un contrôle médical est obligatoire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                    <h2>Permis EC</h2>
                    </div>
                  <img src="{{asset('assets/img/permiEC.png')}}" alt="" class="card-img-top">
                    <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermisEC" role="button" aria-expanded="false" aria-controls="PermisEC">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermisEC">
                            <div class="bg-dark p-2">
                            <p align="justify" class="p-2">Le permis CE autorise la conduite d'un poids lourd de plus de 3,5 tonnes (permis C), attelé d'une remorque dont le PTAC : PTAC : Poids total autorisé en charge dépasse 750 kg. Pour passer le permis CE, il faut avoir au moins 21 ans et avoir le permis C.
                            </p>    
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md col-md-6 col-lg-4">
                <div class="card bg-dark text-light mb-3">
                    <div class="h1 mt-3">
                    <h2>Permis D</h2>
                    </div>
                  <img src="{{asset('assets/img/permiD.png')}}" alt="" class="card-img-top">
                  <div class="card-body text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#PermiD" role="button" aria-expanded="false" aria-controls="PermiD">Voir Plus <i class="bi bi-caret-down-fill"></i></a>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="PermiD">
                            <div class="bg-dark p-2">
                            <p align="justify" class="p-2">Le permis D autorise la conduite d'un véhicule affecté au transport de personnes comportant plus de 9 places assises (conducteur compris). Vous pouvez tracter une remorque dont le PTAC : PTAC : Poids total autorisé en charge ne dépasse pas 750 kg.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<!--about-->
<section id="about" class="py-5">
    <div class="container">
        
        <div class="row align-items-center justify-content-center">
            <div class="col-md">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/image1.png')}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/image2.png')}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/image3.png')}}" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            <div class="col-md py-4 text-justify">
                <h2>Auto-école</h2>
                <p align="justify">Une auto-école, ou autoécole, appelée également école de conduite, est un établissement d’enseignement qui dispense la formation théorique et pratique et des apprentissages qui permettent de se protéger des dangers de la circulation et de tenir compte des autres usagers de l'espace routier (des piétons et des cyclistes), et en vue de passer l'examen du code de la route relative à divers véhicules routiers dans le but d'obtenir un permis de conduire, et pour conduire une automobile. Différentes formations existent en fonction du type de permis.</p>
                
            </div>
        </div>
    </div>
</section>


<!--about-->
<section id="about" class="py-5 bg-dark text-light">
    <div class="container">
        <div class="row align-items-center justify-content-center flex-row-reverse">
            <div class="col-md">
                
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/image4.png')}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/image5.png')}}" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/image6.png')}}" class="d-block w-100 " alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            <div class="col-md py-4">
                <h2>Les panneaux de signalisation routière</h2>
                <p align="justify">Les panneaux de signalisation routière sont des éléments de la signalisation routière. Ils désignent à la fois le dispositif sur lequel est implanté un signal routier et le signal proprement dit.<br>
                   Placés sur le côté des routes, ils ont pour fonction</p>
                   <ul align="justify">
                   <li>de rendre plus sûre la circulation routière en informant les usagers d’éventuels dangers qu’ils peuvent rencontrer.</li>
                   <li>de faciliter cette circulation, en indiquant par exemple les directions à suivre.</li>
                   <li>d'indiquer ou de rappeler diverses prescriptions particulières de police.</li>
                   <li>de donner des informations relatives à l'usage de la route.</li>
                   <ul>
               
            </div>
            
        </div>
        
    </div>
</section>


<!-- Pourquoi nous?-->

<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center mb-3">
            Pourquoi nous?
        </h2>
<div class="accordion accordion-flush" id="bt-faq">
    <div class="accordion-item">
        <h5 class="accordion-hearder" id="faq-one">
           <button class="accordion-button colllapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-one">
           Une relation moniteur-élève facilitée 
           </button>
        </h5>
        <div class="accordion-collapse collapse p-4" id="answer-one" data-bs-parent="#bt-faq">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe maxime esse?
        </div>
    </div>
    <div class="accordion-item">
        <h5 class="accordion-hearder" id="faq-two">
           <button class="accordion-button colllapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-two">
           Un apprentissage ludique axé sur la pratique
           </button>
        </h5>
        <div class="accordion-collapse collapse p-4 " id="answer-two"  data-bs-parent="#bt-faq">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe maxime esse?
        </div>
    </div>
    <div class="accordion-item">
        <h5 class="accordion-hearder" id="faq-tree">
           <button class="accordion-button colllapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-tree">
           Une grande flexibilité 
           </button>
        </h5>
        <div class="accordion-collapse collapse p-4" id="answer-tree" data-bs-parent="#bt-faq">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe maxime esse?
        </div>
    </div>

</div>
    </div>
</section>

<!--footer-->

<footer class="py-3 bg-dark text-white position-relative">
<div class="container">
    <div class="row  ">
        <div class=" col-md mx-3 pb-2">
            <h5 >Horaires d'ouvertoures</h5>
            <span class="mx-3 p-1"><i class="bi bi-clock"></i> Lundi-Vendredi | 9:00 - 18:00</span><br>
            <span class="mx-3 p-1"><i class="bi bi-clock"></i> samedi | 9:00 - 13:00</span>
        </div>
        <div class="col-md-2 mx-3 ">
            <h5 >Contactez nous </h5>
            <span class="mx-3 p-1"><i class="bi bi-telephone"></i> +212600112233</span><br>
            <span class="mx-3 p-1"><i class="bi bi-envelope"></i><a href="www.gmail.com" class="text-decoration-none text-white"> gi.fste@gmail.com </a></span>
        </div>
    </div>


   
   <div class="text-center">
   <a class="text-white fs-2 mx-2" href="www.facebook.com" ><i class="bi bi-facebook"></i></a>
   <a class="text-white fs-2 mx-2" href="www.instagram.com" ><i class="bi bi-instagram"></i></a>
   <a class="text-white fs-2 mx-2" href="www.twitter.com" ><i class="bi bi-twitter"></i></a>
   <a class="text-white fs-2 mx-2 " href="www.youtub.com" ><i class="bi bi-youtube"></i></a>
   <hr>
        <p class="">
            Copyright  &copy; 2022 <a href="#" class="text-decoration-none text-primary"> Omar OUKHOUYA </a> & <a href="#" class="text-decoration-none text-primary"> Khalid HADDOU</a>
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-3">
            <i class="bi bi-arrow-up-circle h2"></i>
        </a>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>