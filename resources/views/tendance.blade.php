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

    <title>Tendance mangashop</title>
</head>
<body>

    <!-- Header --> 
    <!-- Header --> 
    <nav class="navbar navbar-expand-lg color-orange bg-body-tertiary">
        <div class="container-fluid my-2">
            <a class="navbar-brand fw-bold rounded-pill p-1 logo-pc" href="{{url('/index')}}">Mangashop</a>
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
                <a class="mx-3 d-flex" href="{{url('/panier')}}">
                    <img class="profil" src="{{ asset('image\man.png')}}">
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
    <!--end of header-->

    <!--start content-->

    <!--top content-->
    <div class="my-4 mx-2">
        <div class="container-fluid my-2">
            <button onclick="history.go(-1);" class="btn color-orange btn-outline-dark me-2 justify-content-start" type="button">
                <img class="retour me-2" src="../assets/image/NicePng_arrow-png-transparent_1039094.png"/>
                <strong>Retour</strong>
            </button>
            <h1 class="mt-5 fw-bold text-decoration-underligne text-center">
                <u>Tendances</u>
            </h1>
        </div>
    </div>
    <div class="my-4 mx-2">
        <div>
            <h2 class="mt-5 fw-bold text-decoration-underligne text-center">
                <u>Tendance du moment</u>
            </h2>
            <br>
            <div class="contener-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 1.jpg')}}" class="card-img-top border" alt="mha tome 33">
                          
                            <div class="card-body">
                              <h5 class="card-title">my hero academia tome 35</h5>
                              <a href="{{url('/article')}}" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 2.jpg')}}" class="card-img-top border" alt="vigilente mha tome 14">
                          
                            <div class="card-body">
                              <h5 class="card-title">Vigilente my hero academia tome 14</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 3.jpg')}}" class="card-img-top border" alt="boruto">
                          
                            <div class="card-body">
                              <h5 class="card-title">Boruto naruto next generation tome 16</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div> 
                    </div>
                    <!--responsive tablet-->
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 1.jpg')}}" class="card-img-top border" alt="mha tome 33">
                          
                            <div class="card-body">
                              <h5 class="card-title">my hero academia tome 35</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div> 
                    </div>
                    <!--responsive pc-->
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 2.jpg')}}" class="card-img-top border" alt="vigilente mha tome 14">
                          
                            <div class="card-body">
                              <h5 class="card-title">Vigilente my hero academia tome 14</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div> 
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 3.jpg')}}" class="card-img-top border" alt="boruto">
                          
                            <div class="card-body">
                              <h5 class="card-title">Boruto naruto next generation tome 16</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--middle content-->
    <div class="my-4 mx-2">
        <div id="Tendances">
            <h2 class="mt-5 fw-bold text-decoration-underligne text-center">
                <u>Les plus lu</u>
            </h2>
            <br>
            <div class="contener-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 4.jpg')}}" class="card-img-top border" alt="hiromia">
                          
                            <div class="card-body">
                              <h5 class="card-title">Hiromia tome 8</h5><br>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 5.jpg')}}" class="card-img-top border" alt="toilet bound">
                          
                            <div class="card-body">
                              <h5 class="card-title">Toilet-bound hanako-kun tome 11</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 6.jpg')}}" class="card-img-top border" alt="love is war">
                          
                            <div class="card-body">
                              <h5 class="card-title">Love is War tome 25</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <!--responsive tablet-->
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 4.jpg')}}" class="card-img-top border" alt="hiromia">
                          
                            <div class="card-body">
                              <h5 class="card-title">Hiromia tome 8</h5><br>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <!--responsive pc-->
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 5.jpg')}}" class="card-img-top border" alt="toilet bound">
                          
                            <div class="card-body">
                              <h5 class="card-title">Toilet-bound hanako-kun tome 11</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border border-1 border-dark">
                            <img src="{{asset('image/cover 6.jpg')}}" class="card-img-top border" alt="love is war">
                          
                            <div class="card-body">
                              <h5 class="card-title">Love is War tome 25</h5>
                              <a href="#" class="btn btn-primary">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--bottom content-->
    <div class="my-4 mx-2">
        <div id="Categorie">
            <h2 class="mt-5 fw-bold text-decoration-underligne text-center">
                <u>Sortie récemment</u>
            </h2>
            <br>
            <div class="contener-fluid">
                <div class="row">
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/Blame.jpeg')}}" alt="image sf">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/japanese-fantasy-manga.jpg')}}" alt="image fantasy">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/842939.jpg')}}" alt="horreur image">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/Lovely_Loveless_Romance_illust-1.jpg')}}" alt="image romance">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/8ad0b2654d72e1ba33ded13f1dcde5fa1648007584_main.jpg')}}" alt="image action">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/811C+xGQwnL._AC_SY606_.jpg')}}" alt="sport image">
                        </article>
                    </div>
                </div>
                <div class="row mt-4">
                    <!--responsive tablet-->
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/Blame.jpeg')}}" alt="image sf">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/japanese-fantasy-manga.jpg')}}" alt="image fantasy">
                        </article>
                    </div>
                    <!--responsive pc-->
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/842939.jpg')}}" alt="horreur image">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/Lovely_Loveless_Romance_illust-1.jpg')}}" alt="image romance">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/8ad0b2654d72e1ba33ded13f1dcde5fa1648007584_main.jpg')}}" alt="image action">
                        </article>
                    </div>
                    <div class="col">
                        <article class="border border-1 border-dark">
                            <img src="{{asset('image/811C+xGQwnL._AC_SY606_.jpg')}}" alt="sport image">
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end of content-->

    <!--footer-->
    <footer class="color-orange text-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h5 class="mb-3">À propos</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut lacus in dui mattis facilisis. Sed nec ligula id justo vestibulum auctor. </p>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3">Liens utiles</h5>
              <ul class="list-unstyled">
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3">Nous suivre</h5>
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
                <li><a href="https://www.instagram.com/rouillou_draw/"><i class="fab fa-instagram fa-lg">Notre instagram</i></a></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">© 2023 Tous droits réservés.</p>
            </div>
          </div>
        </div>
      </footer>
      
    <!--end of footer-->

</body>
</html>