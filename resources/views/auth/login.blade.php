<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/login-form/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/login-form/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login-form/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/login-form/css/style.css">

    <title>Se Connecter | EbenDraw</title>
</head>
<body>



<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="/login-form/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Se Connecter Avec <strong>EbenDraw</strong></h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group first">
                                <label for="username">Identifiant</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="username" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group last mb-4">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Garder ma session active</span>
                                    <input type="checkbox" name="remember" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié</a></span>
                            </div>

                            <input type="submit" value="Se connecter" class="btn text-white btn-block btn-primary">

                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="/login-form/js/jquery-3.3.1.min.js"></script>
<script src="/login-form/js/popper.min.js"></script>
<script src="/login-form/js/bootstrap.min.js"></script>
<script src="/login-form/js/main.js"></script>
</body>
</html>
