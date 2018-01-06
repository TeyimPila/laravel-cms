<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar is-transparent has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="https://bulma.io/images/bulma-logo.png"
                         alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>
                <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navbarExampleTransparentExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="#">Learn</a>
                    <a class="navbar-item" href="#">Discuss</a>
                    <a class="navbar-item" href="#">Share</a>
                </div>

                <div class="navbar-end">
                    @if(Auth::guest())
                        <a class="navbar-item" href="{{route('login')}}">Login</a>
                        <a class="navbar-item" href="{{route('register')}}">Join Our Community</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable is-left">
                            <a class="navbar-link" href="#">Hey Pila</a>
                            <div class="navbar-dropdown is-boxed">
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
                                    Profile</a>
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>
                                    Notifications</a>
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-cogs"></i></span>
                                    Settings</a>
                                <hr class="navbar-divider">
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                                    Logout</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
