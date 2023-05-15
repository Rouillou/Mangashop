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


    <!--le profil en php-->


    <!--les favori-->
    <div class="my-4 mx-4">
        <h5><strong><u>Mes favoris</u></strong></h5>
    </div>

    <!--les favori en php-->
    
</body>
</html>