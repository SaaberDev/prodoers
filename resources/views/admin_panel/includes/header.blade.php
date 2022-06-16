{{-- Large Device --}}
<header class="adminHeader  boxshadow d-none d-lg-block" id="adminHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-3 v-center text-center">
                <div class="text-center"><img src="{{ $brand_identity['logo'] }}"
                                              class="img-fluid w-75" alt=""></div>
            </div>
            <div class="col-xl-5 col-lg-3 col d-none d-lg-block"> &nbsp;</div>
            <div class="col-xl-2 col-lg-3 col-md-4  v-center">
                <div class="adminNavHeaderSearch">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                               aria-describedby="button-addon2">
                        <button class="btn " type="button" id="button-addon2">
                            <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164"
                                 viewBox="0 0 20.16 20.164">
                                <path id="Path_42" data-name="Path 42"
                                      d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z"
                                      transform="translate(-0.05 0)" fill="#272d3b"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-5 v-center">
                <div class="adminNav ">
                    <ul class="nav headerNavlinks">
                        <li class="nav-item dropdown v-center">
                            <a href="{{ route('telescope') }}" class="nav-link " target="_blank"
                               data-toggle="tooltip" title="Monitor">
                                <img src="{{ asset('_assets/_admin_panel/img/research.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item dropdown v-center">
                            <a href="{{ route('guest.home.index') }}" class="nav-link " target="_blank"
                               data-toggle="tooltip" title="Designwala">
                                <img src="{{ asset('_assets/_admin_panel/img/browse-site.svg') }}" class="img-fluid" alt="">
                            </a>
                        </li>
                        <li class="nav-item dropdown v-center position-relative">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                    src="{{ asset('_assets/_admin_panel/img/bellicon.svg') }}" class="img-fluid" alt="">
                                <span class="notify">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14"
                                         viewBox="0 0 14 14">
                                        <defs>
                                            <radialGradient id="radial-gradient" cx="0.5" cy="0.5" r="1.477"
                                                            gradientTransform="translate(0 0.02) scale(1 0.959)"
                                                            gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ff0404" stop-opacity="0"/>
                                                <stop offset="1" stop-color="red"/>
                                            </radialGradient>
                                        </defs>
                                        <g id="Group_1000" data-name="Group 1000" transform="translate(-1758 -23)">
                                            <circle id="Ellipse_177" data-name="Ellipse 177" cx="7" cy="7" r="7"
                                                    transform="translate(1758 23)" fill="url(#radial-gradient)"/>
                                            <circle id="Ellipse_176" data-name="Ellipse 176" cx="4" cy="4" r="4"
                                                    transform="translate(1761 26)" fill="#ff0404"/>
                                        </g>
                                    </svg>
                                </span> </a>
                            <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown"><a
                                    class="dropdown-item" href="#">New notification</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something
                                    else here</a></div>
                        </li>
                        <li class="nav-item dropdown v-center">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('_assets/_admin_panel/img/headermanlogo.png') }}" alt=""
                                     class="img-fluid">
                            </a>
                            <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">{{ Auth::user()->name ?? '' }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Profile</a>
{{--                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>--}}
                                <form method="POST" action="{{ route('logout') }}" id="logout">@csrf</form>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown v-center">
                            <button data-trigger="#navbar_main" class=" d-lg-none btn bg-white border" type="button">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Small Device --}}
<header class="adminHeader boxshadow d-lg-none d-sm-block" id="adminHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 v-center">
                <div class="adminNav fixedTopSm">
                    <ul class="nav headerNavlinks">
                        <li class="nav-item dropdown v-center">
                            <a class="nav-link " target="_blank" href="https://frontend.designwala.net/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 8.595 8.595">
                                    <path
                                        d="M277.147,121a4.145,4.145,0,0,0-2.965,7.045.469.469,0,0,0,.067.067,4.146,4.146,0,1,0,2.9-7.112Zm2.621,3.432h-1.906v-1.906A2.727,2.727,0,0,1,279.768,124.432Zm-3.336-1.906v2.325l-1.643,1.643A2.718,2.718,0,0,1,276.432,122.526Zm-.632,4.979,1.643-1.643h2.325A2.718,2.718,0,0,1,275.8,127.506Z"
                                        transform="translate(-272.85 -120.85)" fill="#000" stroke="#fff"
                                        stroke-width="0.3"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown v-center position-relative">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                    src="{{ asset('_assets/_admin_panel/img/bellicon.svg') }}" class="img-fluid" alt="">
                                <span class="notify">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="14"
                                         viewBox="0 0 14 14">
                                        <defs>
                                            <radialGradient id="radial-gradient" cx="0.5" cy="0.5" r="1.477"
                                                            gradientTransform="translate(0 0.02) scale(1 0.959)"
                                                            gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#ff0404" stop-opacity="0"/>
                                                <stop offset="1" stop-color="red"/>
                                            </radialGradient>
                                        </defs>
                                        <g id="Group_1000" data-name="Group 1000" transform="translate(-1758 -23)">
                                            <circle id="Ellipse_177" data-name="Ellipse 177" cx="7" cy="7" r="7"
                                                    transform="translate(1758 23)" fill="url(#radial-gradient)"/>
                                            <circle id="Ellipse_176" data-name="Ellipse 176" cx="4" cy="4" r="4"
                                                    transform="translate(1761 26)" fill="#ff0404"/>
                                        </g>
                                    </svg>
                                </span> </a>
                            <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown"><a
                                    class="dropdown-item" href="#">New Notification</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something
                                    else here</a></div>
                        </li>
                        <li class="nav-item dropdown v-center">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img
                                    src="{{ asset('_assets/_admin_panel/img/headermanlogo.png') }}" alt=""
                                    class="img-fluid"> </a>
                            <div class="dropdown-menu profile_dropdown" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">{{ Auth::user()->name ?? '' }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something
                                    else here</a></div>
                        </li>
                        <li class="nav-item dropdown v-center">
                            <button data-trigger="#navbar_main" class="d-lg-none btn bg-white " type="button">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 v-center text-center navMobileLOGO">
                <div class="text-center"><img src="{{ asset('_assets/_admin_panel/img/designwalalogo.svg') }}"
                                              class="img-fluid w-75" alt=""></div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4  v-center">
                <div class="adminNavHeaderSearch">
                    <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
                               aria-describedby="button-addon2">
                        <button class="btn " type="button" id="button-addon2">
                            <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164"
                                 viewBox="0 0 20.16 20.164">
                                <path id="Path_42" data-name="Path 42"
                                      d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z"
                                      transform="translate(-0.05 0)" fill="#272d3b"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
