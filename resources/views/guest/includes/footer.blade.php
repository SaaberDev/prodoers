<footer class=" textsm-center">
    <div class="container">
        <div class="row">
            <div class="">
                <img src="{{--{{ asset(getKey('footer_logo') ? config('designwala_paths.show.site_cms.brand_logo') . getKey('footer_logo') : config('designwala_paths.default.brand_logo')) }}--}}" class="img-fluid" alt="Designwala Logo">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="footerText pt-4">
                    <p class="">{{--{{ getKey('footer_desc') }}--}}</p>
                </div>
                <div class="">
                    <p class="text-white">Payment Method</p>
                    <div class="">
                        <img src="{{--{{ asset(getKey('footer_payment_method') ? config('designwala_paths.admin.images.show.footer.payment_method') . getKey('footer_payment_method') : config('designwala_paths.default.payment_method')) }}--}}" alt="Payment Methods" class="img-fluid w-75">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="footerlinksOne">
{{--                    <h6>Policies</h6>--}}
                    <p class="">
                        <a href="{{ route('guest.policy.privacy') }}">Privacy Policy</a>
                    </p>
                    <p class="">
                        <a href="{{ route('guest.policy.cookie') }}">Cookie Policy</a>
                    </p>
                    <p class="">
                        <a href="{{ route('guest.policy.payment') }}">Payment Policy</a>
                    </p>
                    <p class="">
                        <a href="{{ route('guest.policy.terms_and_conditions') }}">Terms &amp; Conditions</a>
                    </p>
                </div>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="">
{{--                    <h6>Career</h6>--}}
                    <p class="{{--mt-4--}}">
                        <a href="">Work With Us</a>
                    </p>
                    <p class="">
                        <a href="">Customer Support</a>
                    </p>
                    <p class="">
                        <a href="">Customer Stories</a>
                    </p>
                    <p class="">
                        <a href="">Business Resources
                        </a>
                    </p>
                    <p class="">
                        <a href="">Designwala Service</a>
                    </p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="textsm-center text-xl-left text-center wouldLiketoDiscuss">
                    <h2>Would like to
                        discuss your new
                        project?</h2>
                    @include('guest.includes.lets_talk_button')
                </div>
            </div>
        </div>
        <div class="pt-4">
            <hr>
        </div>
        <div class="row ">
            <div class="footerIcon text-center py-4">
                @forelse($social_links as $social_link)
                <a href="{{ $social_link->social_url }}" target="_blank"><img src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_link->social_icon) }}" alt="{{ $social_link->social_title }}"></a>
                @empty
                    No Social Icons
                @endforelse
            </div>
            <p class="text-center">{{ config('designwala.policy.site_content.copyright') }}</p>
        </div>
    </div>
</footer>
