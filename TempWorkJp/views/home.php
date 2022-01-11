<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../assets/style/style.css">
        <title>home</title>
</head>

<body>


    <!-- navbar debut -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body row">
                    <ul class="navbar-nav pe-3">
                        <li class="nav-item text-center col-6">
                            <form method="post" action="../views/parameters.php">
                                <input type="submit" class="btn btn-success" name="myChoiceParams" id="myChoiceParams" value="Parametres">
                                <i class="fas fa-user-cog"></i>
                            </form>
                        </li>
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" aria-current="page" href="#">Sujet1</a>
                        </li>
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" href="#">Sujet2</a>
                        </li>
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" href="#">sujet3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../views/pages.php">Fil d'actualité</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="offcanvas-body">
            <ul class="navbar-nav  pe-3">
                <li class="nav-item text-center col-6">
                    <form method="post" action="../views/parameters.php">
                        <input type="submit" class="btn btn-success" name="myChoiceParams" id="myChoiceParams" value="Parametres">
                        <i class="fas fa-user-cog"></i>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Sujet1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sujet2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sujet3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../views/pages.php">>Fil d'actualité</a>
                </li>
        </div>
        <!-- navbar fin -->

        <!-- carroussel -->


        <header class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/meteo_nuit.jpeg.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/pexels-roberto-nickson-2775196.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/soleil.jpeg.jpg" class="d-block w-100" alt="...">
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
        </header>
        <!-- fin carroussel -->

        <!-- card home -->

        <div class=" row justify-content-center g-0">
            <div class="card mb-3 mt-5" style="">
                <div class="row g-0 ">
                    <div class="col-md-2">
                        <img src="../assets/img/soleil.jpeg.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a type="submit" href="" value="Plus d'info" name="btn-submit" class=" btn btn-primary position-absolute bottom-0 end-0 m-3">Plus d'info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card home fin -->
        <div class=" row justify-content-center g-0">
            <div class="card mb-3 mt-5" style="">
                <div class="row g-0 ">
                    <div class="col-md-2">
                        <img src="../assets/img/soleil.jpeg.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a type="submit" href="" value="Plus d'info" name="btn-submit" class=" btn btn-primary position-absolute bottom-0 end-0 m-3">Plus d'info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>