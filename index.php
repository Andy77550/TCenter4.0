<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Training Center 4.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/fontawesome.min.css" integrity="sha512-pvr7xUq+1V77GWmZVvQbM5mozl2iouCzyJG3xxxJPoGQ3HlxHUmMHxlnw4vFUNX1gj80WH4XO7a2un+XQZNkJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">
           <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="Logo du training Center 4.0"> <!-- <img src="./images/img-partenaires/logo-ue.jpg" alt="Logo de l'union européenne" width="70">--></a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown dropdown-mega position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nous Connaitre</a>
                        <div class="dropdown-menu shadow">
                            <div class="mega-content px-md-4">
                                <div class="container-fluid text-center">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-sm-4 py-4 px-xl-5 px-4">
                                            <div>
                                                <a class="list-group-item" href="#">
                                                    <img src="./images/p1.jpg" alt="">
                                                </a>
                                            </div>
                                            <br>
                                           <h5>Qui Sommes-Nous ?</h5>
                                        </div>
                                        <div class="col-sm-4 py-4 px-xl-5 px-4">
                                            <div>
                                                <a class="list-group-item" href="#">
                                                    <img src="./images/p2.jpg" alt="">
                                                </a>
                                            </div>
                                            <br>
                                           <h5>Partenaires</h5>
                                        </div>
                                        <div class="col-sm-4 py-4 px-xl-5 px-4">
                                            <div>
                                                <a class="list-group-item" href="#">
                                                    <img src="./images/p3.jpg" alt="">
                                                </a>
                                            </div>
                                            <br>
                                           <h5>Inscriptions</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">E-learning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.paris-villaroche-training-center.parcours.pro/" target="_blank">Plateforme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- HOME -->
    <section class="home" id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/home/tc-img-5.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Bienvenue au Training Center 4.0</h1>
                        <br>
                        <p>Ce projet est cofinancé par l'Union européenne</p>

                        <div class="slider-btn">
                            <button class="btn btn-1">En savoir plus</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/home/tc-img-3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                       <h1>Trouvez votre voie aérienne</h1>
                       <br>
                        <p>Des formations principalement orientées vers le secteur aéronautique, en lien étroit avec les entreprises.</p>
                        <div class="slider-btn">
                            <button class="btn btn-1">Voir nos formations</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/home/tc-img-4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                       <h1>Source de Personnel Qualifié</h1>
                       <br>
                        <p>Le Training Center 4.0 devient une source de personnel qualifié dont les entreprises du secteur aéronautique peuvent bénéficier dès à présent soit directement, soit en relation avec leur organisation professionnelle.</p>
                        <div class="slider-btn">
                            <button class="btn btn-1">Voir nos partenaires</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- BAND -->

    <section class="band ">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="./images/img-partenaires/logo-ue.jpg" height="100" width="150" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/REGION_IDF.jpg" height="100" width="200" alt="">
                </div>
                
                <div class="slide">
                    <img src="./images/img-partenaires/pole-emploi-2.jpg" height="100" width="130" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/melun.jpg" height="100" width="110" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/PREF77.jpg" height="100" width="100" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/AIF.jpg" height="100" width="120" alt="">
                </div>
                
                <div class="slide">
                    <img src="./images/img-partenaires/FF.png" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/EOZ.jpg" height="100" width="190" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/LdV.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/htec.jpg" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/cfa.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/cam-system.png" height="100" width="200" alt="">
                </div>
                <div class="slide">
                    <img src="./images/img-partenaires/jbplogo.jpg" height="100" width="200" alt="">
                </div>
                
               
                
                

                
               
            </div>
        </div>
    </section>

    <!-- ABOUT -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
                    <div class="about-img">
                        <img src="./images/about/tc-img-9.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="section-title-2">
                        <h2>Une offre de formation au coeur du pôle aéronautique</h2>
                    </div>
                    <br>
                    <div class="about-text">
                        <p>Le Training Center 4.0 devient une source de personnel qualifié dont les entreprises du secteur aéronautique peuvent bénéficier dès à présent soit directement, soit en relation avec leur organisation professionnelle.</p>
                    </div>
                    <br>
                    <div class="about-btn">
                        <button class="btn btn-2">En savoir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Actualités du moments -->

    <section class="moment section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <div class="section-title">
                    <h2>Actualités du moments</h2>
                </div>
                </div>
            </div>
            <br />
            <br />
            <div class="row justify-content-center">
                <div class="card" style="width: 20rem;">
                    <img src="./images/home/tc-img-1.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Construire un avion ? C'est par là ! ✈️</h5>
                        <p class="card-text">Atelier de formation gratuit et rémunéré par la Région (selon situation).</p>
                        <div class="slider-btn">
                            <button class="btn btn-1">Voir les actualités</button>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <img src="./images/home/tc-img-3.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Construire un avion ? C'est par là ! ✈️</h5>
                        <p class="card-text">Atelier de formation gratuit et rémunéré par la Région (selon situation).</p>
                        <div class="slider-btn">
                            <button class="btn btn-1">Voir les actualités</button>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <img src="./images/home/tc-img-2.jpg" class="card-img-top" alt="...">
                    <br>
                    <div class="card-body">
                        <h5 class="card-title">Construire un avion ? C'est par là ! ✈️</h5>
                        <p class="card-text">Atelier de formation gratuit et rémunéré par la Région (selon situation).</p>
                        <div class="slider-btn">
                            <button class="btn btn-1">Voir les actualités</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="section-title-2">
                        <h2>Training Center 4.0</h2>
                    </div>
                    <br>
                    <div class="about-text">
                        <p>Ces formations, destinées en priorité aux demandeurs d’emploi et aux jeunes inactifs, sans limite d’âge et sans sélection préalable, constitue un véritable tremplin vers l’obtention d’un CDI.</p>
                    </div>
                    <br>
                    <div class="about-btn">
                        <button class="btn btn-2">En savoir plus</button>
                        <button class="btn btn-2 video-play-btn">video</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 d-flex align-items-center justify-content-center">
                    <div class="about-img">
                        <img src="./images/about/tc-img-7.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video popup -->

    <div class="video-popup">
        <div class="video-popup-inner">
            <div class="iframe-box">
            <video controls width="250">
                <source src="./video/video-1.mp4" type="video/mp4"></video>
            </div>
        </div>
    </div>




















    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>