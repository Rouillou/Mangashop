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
    

    <title>Profil mangashop</title>
    
</head>
<body>
    <!-- Header --> 
    <nav class="navbar navbar-expand-lg color-orange bg-body-tertiary">
        <div class="container-fluid">
            <div class="ms-3">
                <h2><strong><u>Votre profil</u></strong></h2>
            </div>
            <a class="mx-3 d-flex" href="panier.html">
                <img class="panier" src="{{asset('image/shopping-bag-black-silhouette.png')}}">
            </a>
        </div>
    </nav>
    <!-- End of header -->

    <!--start content-->
    <div class="my-4 mx-4">
        <div class="container-fluid">
            <button onclick="history.go(-1);" class="btn color-orange btn-outline-dark me-2 justify-content-start" type="button">
                <img class="retour me-2" src="{{asset('image/NicePng_arrow-png-transparent_1039094.png')}}"/>
                <strong>Retour</strong>
            </button>
        </div>
    </div>
    <!--le profil en React-->


    <div class="row color-blue rounded border border-dark centrer-profil mb-5">
        <div class="col my-4 mx-2">
            <img src="{{asset('image/Noodle_Phase_5_.webp')}}" class="card-img-top image-articles border rounded" alt="mha tome 33" style="width: 100% !important">
        </div>
        <div class="col my-2 mr-2">
            <div class="my-2">
                <h1>Rouillou</h1>
            </div>
            <div class="rounded color-white p-2 ">
                <h2><u>Biodescription :</u></h2>
                <div>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, exercitationem. Vel neque nostrum accusantium velit hic et tempora, assumenda quis odio necessitatibus dolor cum consectetur eligendi consequatur asperiores ad incidunt.
                    Odit, optio quos.
                </div>
            </div>
            <div class="mt-2 justify-content-end">
                <form class="" method="POST" action="{{ route('logout') }}">
                    @csrf
            
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"
                            class="logout-link">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>
    

    <!--les favori-->
    <div class="my-4 mx-4">
        <h5><strong><u>Mes favoris</u></strong></h5>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="{{url('/article')}}">
                    <div class="card border border-1 border-dark" style="max-width: 200px;">
                        <img src="{{asset('image/cover 1.jpg')}}" class="card-img-top border" alt="mha tome 33">
                        <div class="card-body">
                            <h5 class="card-title">my hero academia tome 35</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br><br><br><br>


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
                <li><a href="#"><i class="fab fa-facebook fa-lg">Notre Facebook</i></a></li>
                <li><a href="#"><i class="fab fa-twitter fa-lg">Notre twitter</i></a></li>
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