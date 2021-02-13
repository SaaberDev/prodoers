<header class="designwalaHeader d-none d-lg-block" id="designwalaHeader">
    <nav class="navbar navbar-hover navbar-expand-lg navbar-dark designwalaNavbarColor">
        <div class="container" style="position: relative;">
            <a href="{{ route('guest.home.index') }}" class="navbar-brand text-white font-weight-bold large-d-logo">
                <img src="https://via.placeholder.com/150x40.png{{--{{ asset(config('designwala_paths.default.brand_logo')) }}--}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="main_nav99">
                <ul class="navbar-nav ml-auto">
                    @include('guest.includes.navbar.mega_menu')
                    <li class="nav-item"> <a class="nav-link text-white" href="#">Blog</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="#" alt=""> </a>
                        <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Your Name <span><img src="#" alt="user_image"></span></a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a> </div>
                    </li>
                </ul>
                <button type="button" class="btn text-white " data-toggle="modal" data-target="#joinUs">Sign In</button>
            </div>
            <!-- navbar-collapse.// -->
        </div>
        <!-- container //end -->
    </nav>
</header>

@include('guest.includes.navbar.mobile_top_navbar')
