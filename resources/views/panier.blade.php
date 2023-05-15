<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--bootstrap popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--bootstrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!--mon css-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <title>Panier mangashop</title>
</head>
<body>
    <!--debut du haut de page-->
    <nav class="navbar navbar-expand-lg color-orange bg-body-tertiary">
        <div class="container-fluid my-2">
            <a class="navbar-brand fw-bold rounded-pill p-1 logo-pc" href="{{url('/')}}">Mangashop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn color-blue btn-outline-light me-2" type="submit">Search</button>
                </form>
                <a class="mx-3 d-flex" href="{{url('/panier')}}">
                    <img class="panier" src="{{ asset('image/shopping-bag-black-silhouette.png')}}">
                </a>
                <a class="mx-3 d-flex" href="{{ Auth::check() ? url('/profil') : url('/formulaire') }}">
                    <img class="profil" src="{{ asset('image/man.png') }}">
                </a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light color-blue">
        <div class="container justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item pt-sm-1">
                    <a class="nav-link h6 fw-bold" href="{{ url('/categorie')}}">Catégorie</a>
                </li>
                <li class="nav-item pt-sm-1">
                    <a class="nav-link h6 fw-bold" href="{{ url('/tendance')}}">Tendances</a>
                </li>
                <li class="nav-item dropdown pt-sm-1">
                    <a class="nav-link h6 fw-bold dropdown-toggle" href="{{ url('/merchandising')}}" data-bs-toggle="dropdown">Merchandising</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">T-shirts</a></li>
                        <li><a class="dropdown-item" href="#">Sweat-shirts</a></li>
                        <li><a class="dropdown-item" href="#">Posters</a></li>
                        <li><a class="dropdown-item" href="#">Figurines</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--fin du haut de page-->

    <!--start page-->
    <div class="my-4 mx-2">
        <div class="container-fluid my-2">
            <button onclick="history.go(-1);" class="btn color-orange btn-outline-dark me-2 justify-content-start" type="button">
                <img class="retour me-2" src="{{asset('image/NicePng_arrow-png-transparent_1039094.png')}}"/>
                <strong>Retour</strong>
            </button>
            <h1 class="mt-5 fw-bold text-decoration-underligne text-center">
                <u>Panier</u>
            </h1>
        </div>
    </div>
    
    <!--php-->
</body>
</html>
