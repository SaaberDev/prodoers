<div class="section  bgcustomLightgray sectionNavTwo d-none d-lg-block" id="sectionNavTwo">
    <div class=" container-xl container-fluid">
        <ul class="nav justify-content-center">
            <li class="col-lg-2 nav-item"> <a class="nav-link active text-center  " aria-current="page" href="{{ route('user.home.index') }}">Service </a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center  " href="notfound.php">Not Found</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center  " href="{{ route('user.search.index') }}">Search Page</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center  " href="{{ route('user.single_category.index') }}">Single Category</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center  " href="{{ route('user.single_service.index') }}">Single Service Page</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center  " href="{{ route('user.order_detail.index') }}">Order Deatils</a> </li>
        </ul>
    </div>
</div>

<div class="section  bgcustomLightgray sectionNavTwo d-none d-lg-block" id="sectionNavTwo">
    <div class=" container-xl container-fluid">
        <ul class="nav justify-content-center">
            <li class="col-lg-2 nav-item"> <a class="nav-link active text-center" aria-current="page" href="#">Logo Design</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center" href="#">Web Design</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center" href="#">Wordpress</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center" href="#">Laravel</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center" href="#">Multi-Vendor Website</a> </li>
            <li class="col-lg-2 nav-item"> <a class="nav-link text-center" href="#">Single-Vendor Website</a> </li>
        </ul>
    </div>
</div>

@push('scripts')
{{--    <script>
        ///////////////// fixed menu on scroll for desktop
        if ($(window).width() > 992) {
            $(window).scroll(function(){
                if ($(this).scrollTop() > 40) {
                    $('#sectionNavTwo').addClass("fixed-top");
                    // add padding top to show content behind navbar
                    $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
                }else{
                    $('#sectionNavTwo').removeClass("fixed-top");
                    // remove padding top from body
                    $('body').css('padding-top', '0');
                }
            });
        } // end if
    </script>--}}
@endpush
