<header class="designwalaHeader d-none d-lg-block" id="designwalaHeader">
    <nav class="navbar navbar-hover navbar-expand-lg navbar-dark designwalaNavbarColor">
        <div class="container">
            <a class="navbar-brand " href="{{ route('guest.home.index') }}">
                <div class="logo">
                    <img class="img-fluid img-2" src="{{ asset('_assets/_guest/img/final-logo.svg') }}" alt="ProDoers Logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav99" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="main_nav99">
                <ul class="navbar-nav ms-auto">
                    {{-- Mega Menu --}}
                    @include('guest.includes.mega-menu.mega-menu')
                    <li class="nav-item"><a class="nav-link text-white" href="https://blog.prodoers.net">Blog</a></li>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('_default/user.png') }}" alt="">
                            </a>
                            <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">{{ Auth::user()->username }}
                                    <span><img src="https://via.placeholder.com/30x30.png" alt=""></span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('client.dashboard') }}">Dashboard</a>

                                <form method="POST" action="{{ route('logout') }}" id="logout">@csrf</form>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                            </div>
                        </li>
                    @endauth
                </ul>
                @guest
                    <a type="button" id="logged_in" class="btn text-white" href="#sign_in">Sign In</a>
                @endguest

            </div>
            <!-- navbar-collapse.// -->
        </div>
        <!-- container //end -->
    </nav>
</header>

@include('guest.includes.navbar.mobile-navbar')
