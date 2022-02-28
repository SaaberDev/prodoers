@auth
    @if(!Auth::user()->hasVerifiedEmail())

        @if(!Session::has('status') && Session::get('status') !== 'verification-link-sent')
        <div class="alert alert-danger text-center" role="alert" style="padding: 4px 4px; font-size: 14px; margin: 0;">
            <form method="POST" action="{{ route('verification.send') }}" id="verification_send">
                @csrf
            </form>
            Your email is not verified, please verify your email address. <a href="{{ route('verification.send') }}" onclick="event.preventDefault(); document.getElementById('verification_send').submit();">Resend</a>
        </div>
        @else
        <div class="alert alert-success text-center" role="alert" style="padding: 4px 4px; font-size: 14px; margin: 0;">
            We have send you a verification link, please check your email address and verify.
        </div>
        @endif
    @endif
@endauth

@include('guest.includes.navbar.navbar')
@include('guest.includes.navbar.sub-navbar')
@include('guest.includes.modal.signin')
@include('guest.includes.modal.signup')
@include('guest.includes.modal.forgot-password')
