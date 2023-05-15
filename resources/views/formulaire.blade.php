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

    <title>formulaire mangashop</title>
  </head>
  <body>

    <!-- Header --> 
    <nav class="navbar navbar-expand-lg color-orange bg-body-tertiary">
      <div class="container-fluid">
        <div class="ms-3">
          <h2 ><strong><u id="Titre_formulaire">Se connecter</u></strong></h2>
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
          <div><h4><strong><u id="texte_formulaire">Veuillez vous connecter</u></strong></h4></div>
          <div id="se_connecter" style="display:block">
            <form class="mt-4" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>

              <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

              <button type="submit" class="btn btn-light" href="{{url('/')}}" >Se connecter</button>
            </form>
          
            <div class="mt-3">
              <p>Vous n'avez pas de compte ?</p>
              <button id='creer_un_compte' class="btn btn-light"><u>Créer un compte</u></button>
            </div>
          </div>






          <div id="créer_un_compte" style="display:none">
            <form class="mt-4" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="mb-3">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>

              {{-- <div class="mb-3">
                  <label for="profile_photo" class="form-label">{{ __('Profile Photo') }}</label>
                  <input id="profile_photo" class="form-control" type="file" name="profile_photo" accept="image/*" required>
                  @error('profile_photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div> --}}

              <div class="mb-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>

              <div class="mb-3">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

              <div class="mb-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>

              <button type="submit" class="btn btn-light" href="{{url('/')}}">Valider</button>
            </form>
          
            <div class="mt-3">
              <p>Vous avez déja un compte ?</p>
              <button id='se_connecter_boutton' class="btn btn-light"><u>Se connecter</u></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>