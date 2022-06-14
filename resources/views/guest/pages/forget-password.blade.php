@extends('guest.layouts.app')
@section('title', 'category_name')

@push('styles')
    {{-- Internal Styles --}}

@endpush

@section('content')

    <section class="login__wrapper">
        <div class="container">
            <div class="row login__area">
                <div class="col-md-12 text-center forget-password-modal">
                    <h3 class="pb-4">Forgot Password</h3>

                    <img src="http://127.0.0.1:8000/_assets/_guest/img/notfoundpage/notfound.svg" class="img-fluid" alt="254">
                    <div class="modalButton">
                        <p>
                            Forgot your password ? No problem. Just let us know your email
                            address and we will email you a password reset link that will
                            allow you to choose a new one.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <div>
                        </div>


                        <form class="row" >
                            <div class="col-md-12">
                                <input type="text" class="form-control login_email " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                            </div>
                            <div class="col-md-12 py-4">
                                <button type="submit" class="btn btn-block bgOne text-white py-2 signIn_button">
                                    Send reset link
                                </button>
                            </div>
                        </form>
                    </div>


                    <!-- Livewire Component wire-end:q2bB4vEkEc0J9kqPiOGd -->
                    <div class="col-md-12">
                        <div class="text-center">
                            <h6>
                                <a class="btn colorOne px-0" href="#">Back to Sign In</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
