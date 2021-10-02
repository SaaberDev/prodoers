<footer>
    <div class="dw_footer">
        <div class="container">
            <!-- first row -->
            <div class="row dw_footer-border">
                <div class="col-lg-8 col-xl-10">
                    <div class="first_footer">
                        <h1>Would like to discuss your new project?</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-2 text_center pr-lg-0">
                    <div class="talk justify-content-end first_footer">
                        <button type="button" class="btn ff_btn">Let's Talk</button>
                    </div>
                </div>
            </div>
            <!-- 2nd row -->
            <div class="row g-xl-0 justify-content-center">
                <div class="col-lg-4 col-md-6 col-xl-4 col-sm-6">
                    <div class="second_footer_one">
                        <img class="img-fluid img-1" src="{{ asset('_assets/_guest/img/footer/footer-logo.svg') }}" alt="ProDoers Logo">
                        <p>Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna </p>
                        <div class="img-pay">
                            <img class="img-fluid black" src="{{ asset('_assets/_guest/img/footer/payment_methods.svg') }}" alt="Payment Method (bKash, Paypal, Nogod, Visa)">
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6 ">
                    <div class="second_footer_two">
                        <ul class="list-group">
                            <li class="list-item"><a href="#">Career</a></li>
                            <li class="list-item"><a href="{{ route('guest.policy.privacy') }}">Privacy Policy</a></li>
                            <li class="list-item"><a href="{{ route('guest.policy.cookie') }}">Cookie Policy</a></li>
                            <li class="list-item"><a href="{{ route('guest.policy.payment') }}">Payment Policy</a></li>
                            <li class="list-item"><a href="{{ route('guest.policy.terms_and_conditions') }}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-3 col-sm-6">
                    <div class="second_footer_three">
                        <ul class="list-group">
                            <li class="list-item"> <a href="#">Customer Support</a> </li>
                            <li class="list-item"> <a href="#">Customer Stories</a> </li>
                            <li class="list-item"> <a href="#">Business Resources</a> </li>
                            <li class="list-item"> <a href="#">Paypal Service</a> </li>
                            <li class="list-item"> <a href="#">Designwala Service</a> </li>
                        </ul>
                    </div>
                </div>


                <div class="col-xl-4 col-md-8 col-sm-6 dw-second-footer">
                    <div class="second_footer_four">
                        <h5>Sign up for the newsletter</h5>

                        {{-- newsletter component --}}
                        @livewire('guest.newsletter.newsletter-component')

                        <div class="footer-icon d-md-block d-none">
                            <ul class="list-inline">
                                @forelse($social_links as $social_link)
                                <li class="list-inline-item">
                                    <a href="{{ $social_link->social_url }}" target="_blank"><img class="img-fluid black" src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_link->social_icon) }}" alt="{{ $social_link->social_title }}"></a>
                                </li>
                                @empty
                                    <p class="mt-3">No Social Icons</p>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="copyright text-center">
                    <div class="footer-icon d-md-none d-block">
                        <ul class="list-inline">
                            @forelse($social_links as $social_link)
                            <li class="list-inline-item">
                                <a href="{{ $social_link->social_url }}" target="_blank"><img class="img-fluid black d-width" src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_link->social_icon) }}" alt="{{ $social_link->social_title }}"></a>
                            </li>
                            @empty
                                No Social Icons
                            @endforelse
                        </ul>
                    </div>
                    <p class="m-0">{!! config('static_content._default.data.footer.copyright') !!}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

