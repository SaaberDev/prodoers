<header class="designwalaHeader d-lg-none d-sm-block" id="designwalaHeader">
    <nav class="navbar navbar-expand-lg navbar-dark designwalaNavbarColor">
        <div class="container"><a class="navbar-brand text-white font-weight-bold"
                                  href="{{ route('guest.home.index') }}">DESIGNWALA</a>
            <button data-trigger="#navbar_main" class="d-lg-none btn bg-white" type="button">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
</header>

<!--nav for offcanvas -->
<div class="offcanvasnav" id="offcanvasnav">
    <div class="container">
        <!--        <button data-trigger="#navbar_main" class="d-lg-none btn btn-warning" type="button">  Show navbar </button>-->
        <nav id="navbar_main"
             class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-white d-lg-none d-sm-block shadow">
            <div class="offcanvas-header">
                <button class="btn  btn-close float-right"> &times</button>
                {{--                <h2 class="py-2 px-3">Designwala</h2>--}}
                <a class="navbar-brand text-black-50 font-weight-bold py-2 px-3" href="{{ route('guest.home.index') }}">DESIGNWALA</a>
            </div>
            <ul class="nav bd-links flex-column ">
                <!--                     dashboard -->
                <!--service-->
                <li class="nav-item clearfix"><a class="nav-link collapsed " data-toggle="collapse" href="#services"
                                                 role="button" aria-expanded="false"> Services <span class="nav-arrow"><svg
                                xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                                <text id="_" data-name=">" transform="translate(0 21)" fill="#141414" font-size="20"
                                      font-family="Poppins-Regular, Poppins">
                                    <tspan x="0" y="0">&gt;</tspan>
                                </text>
                            </svg>
                        </span> </a>
                    <!--      service sub menu -->
                    <div class="collapse" id="services" style="">
                        <ul class="list-unstyled font-weight-normal pb-1 ">
                            @foreach($services->take(10) as $service)
                            <li class="nav-item sub-item"><a href="./index.html" class="nav-link d-inline-flex align-items-center sub-menu-link pl-4 active">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <!--service end -->
                <!--            blog -->
                <li class="nav-item"><a class="nav-link " href="index.html"> Blog </a></li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li class="nav-item">
                    <button id="singinbutton" type="button" class="btn" data-toggle="modal" data-target="#signIn">Sign
                        In
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn " data-toggle="modal" data-target="#signUp">Sign Up</button>
                </li>
            </ul>
        </nav>
    </div>
</div>
