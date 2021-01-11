<div class="section  bgcustomLightgray sectionNavTwo d-none d-lg-block" id="sectionNavTwo">
    <div class=" container-xl container-fluid">
        <ul class="nav justify-content-center">
            @foreach($service_categories->take(6) as $service_category)
                <li class="col-lg-2 nav-item"> <a class="nav-link active text-center" aria-current="page" href="{{ route('guest.service_category.index', $service_category->slug) }}">{{ $service_category->title }}</a> </li>
            @endforeach
        </ul>
    </div>
</div>

@push('scripts')
{{--    <script>--}}
{{--        ///////////////// fixed menu on scroll for desktop--}}
{{--        if ($(window).width() > 992) {--}}
{{--            $(window).scroll(function(){--}}
{{--                if ($(this).scrollTop() > 40) {--}}
{{--                    $('#sectionNavTwo').addClass("fixed-top");--}}
{{--                    // add padding top to show content behind navbar--}}
{{--                    $('body').css('padding-top', $('.navbar').outerHeight() + 'px');--}}
{{--                }else{--}}
{{--                    $('#sectionNavTwo').removeClass("fixed-top");--}}
{{--                    // remove padding top from body--}}
{{--                    $('body').css('padding-top', '0');--}}
{{--                }--}}
{{--            });--}}
{{--        } // end if--}}
{{--    </script>--}}
@endpush
