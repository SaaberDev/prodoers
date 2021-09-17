<li class="nav-item dropdown has-megamenu">
    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"> Service </a>
    <div class="dropdown-menu animate fade megamenu bg-white  bg-custom" role="menu">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                    <div class="col-megamenu py-3">
                        <h5 class="title">pages</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                    <!-- col-megamenu.// -->
                </div>
                <!-- end col-3 -->
                @foreach($service_categories->take(5) as $service_category)
                <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                    <div class="col-megamenu py-3">
                        <h5 class="title">{{ $service_category->title }}</h5>
                        <ul class="list-unstyled">
                            @foreach($service_category->services->take(6) as $service)
                                <li><a href="{{ route('guest.service.index', $service->slug) }}">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- col-megamenu.// -->
                </div>
                @endforeach

            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- dropdown-mega-menu.// -->
</li>
