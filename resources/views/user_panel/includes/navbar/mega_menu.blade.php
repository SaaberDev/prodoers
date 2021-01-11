<li class="nav-item dropdown has-megamenu"> <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown"> Service </a>
    <div class="dropdown-menu animate fade megamenu bg-white" role="menu">
        <div class="row">
            @foreach($service_categories->take(12) as $service_category)
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
    <!-- dropdown-mega-menu.// -->
</li>
