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

<div class="d-flex justify-content-center half">
    <div class="contents">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="form-block mx-auto">
                        <div class="mb-3">
                            <h3 style="font-family: Futura; color: #005792">EbenDraw</h3>
                            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group first">
                                <label class="font-weight-bold" for="username">Nom d'utilisateur</label>
                                <input type="text" name="email" class="@error("email") is-invalid @enderror form-control" value="{{ old('email') }}" id="username">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password"><span class="font-weight-bold">Mot de passe</span> <small class="font-italic text-secondary">(doit contenir au moins 6 caractères)</small></label>
                                <input type="password" name="password" class="@error("password") is-invalid @enderror form-control" id="password">
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-sm-flex mb-4 align-items-center">
                                <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Garder ma session active</span>
                                    <input name="remember" type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
                                {{--<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>--}}
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">Se Connecter</button>

                        </form>
                    </div>
                    <small class="text-black-50 d-flex justify-content-center mt-4">
                        Copyright 2020 -
                        <script type="text/javascript"> document.write((new Date()).getFullYear())</script>
                        <i class="mx-1 text-dark">ALpha Labo</i> Inc. Version 1.0.0
                    </small>
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
