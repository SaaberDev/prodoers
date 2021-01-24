<footer class=" textsm-center">
    <div class="container">
        <div class="row">
            <div class="">
                <img src="{{ asset(config('designwala_paths.admin.images.show.footer.logo') . getFooterKey('footer_logo')) }}" class="img-fluid" alt="{{ getFooterKey('footer_logo') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="footerText pt-4">
                    <p class="">{{ getFooterKey('footer_desc') }}</p>
                </div>
                <div class="">
                    <p class="text-white">Payment Method</p>
                    <div class=""> <img src="{{ asset('_user_panel/img/Payment_Methods.svg') }}" alt="" class="img-fluid w-75"> </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="footerlinksOne">
                    <p class=""><a href="">Work With Us</a></p>
                    <p class=""><a href="">Privacy Policy
                        </a></p>
                    <p class=""><a href="">Terms &amp; Conditions
                        </a></p>
                    <p class=""><a href="">Press Enquiries</a></p>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <div class="">
                    <p class=""><a href="">Customer Support
                        </a></p>
                    <p class=""><a href="">Customer Stories
                        </a></p>
                    <p class=""><a href="">Business Resources
                        </a></p>
                    <p class=""><a href="">Paypal Service</a></p>
                    <p class=""><a href="">Designwala Service</a></p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="textsm-center text-xl-left text-center wouldLiketoDiscuss">
                    <h2>Would like to
                        discuss your new
                        project?</h2>
                    @include('user_panel.includes.lets_talk_button')
                </div>
            </div>
        </div>
        <div class="pt-4">
            <hr>
        </div>
        <div class="row ">
            <div class="footerIcon text-center py-4">
                <a href=""><img src="{{ asset('_user_panel/img/footer/Icon%20awesome-facebook-f.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('_user_panel/img/footer/Icon%20awesome-linkedin-in.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('_user_panel/img/footer/Icon%20awesome-twitter.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('_user_panel/img/footer/Icon%20awesome-youtube.svg') }}" alt=""></a>
            </div>
            <p class="text-center">{{ getFooterKey('copyright') }}</p>
        </div>
    </div>
</footer>
