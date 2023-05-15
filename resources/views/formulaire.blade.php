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
    <link rel="stylesheet" href="../assets/style.css" type="text/css">

    <title>formulaire mangashop</title>
  </head>
  <body>

    <!-- Header --> 
    <nav class="navbar navbar-expand-lg color-orange bg-body-tertiary">
      <div class="container-fluid">
        <div class="ms-3">
          <h2><strong><u>Se connecter</u></strong></h2>
        </div>
      </div>
    </nav>
    <!-- End of header -->

    <div class="my-4 mx-2">
      <div class="container-fluid my-2">
        <button onclick="history.go(-1);" class="btn color-orange btn-outline-dark me-2 justify-content-start" type="button">
          <img class="retour me-2" src="{{asset('image/NicePng_arrow-png-transparent_1039094.png')}}"/>
          <strong>Retour</strong>
        </button>
      </div>

      <div class="color-blue rounded border border-dark centrer-form">
        <div class="container-fluid my-2">
          <div><h4><strong><u>Veuillez vous connecter</u></strong></h4></div>

          <form class="mt-4">
            <div class="mb-3">
              <label for="email" class="form-label">Adresse email</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" required>
            </div>

            <button type="submit" class="btn btn-light">Se connecter</button>
          </form>

          <div class="mt-3">
            <p>Vous n'avez pas de compte ?</p>
            <button class="btn btn-light"><u>Créer un compte</u></button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>