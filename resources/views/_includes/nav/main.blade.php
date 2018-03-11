<nav class="navbar  has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="{{asset('img/bulma-logo.png')}}"
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
                    <a class="navbar-item" href="{{route('login')}}">LOGIN</a>
                    <a class="navbar-item" href="{{route('register')}}">REGISTER</a>
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
                            <a class="navbar-item" href="{{route('manage.dashboard')}}">
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-cogs"></i></span>
                                Manage</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="{{route('logout')}}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                                Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>