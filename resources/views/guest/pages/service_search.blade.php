@extends('guest.layouts.app')
@section('title', 'Services')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('guest.search.search-result-page-component', ['service_thumbnail' => $service_thumbnail])

    {{-- Like to discuss Start --}}
    {{--<div class="section py100 bgcustomLightgray ptSm50 pbSm50" id="searchPageWouldLiketoDiscussYourNewProject">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="">Would like to discuss
                        your new project?</h2>
                    <div class="pt-3">
                        <button type="button" class="btn bgOne rounded-0 px-5 text-white py-2">Let's Talk</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <div class="pt-5"><img src="{{ asset('_assets/_guest/img/searchpage/liketodiscuss.png') }}" alt="" class="img-fluid w-75"></div>
                </div>
            </div>
        </div>
    </div>--}}
    {{-- Like to discuss End --}}

@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
