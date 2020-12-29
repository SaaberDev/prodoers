@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush


{{--
<a id="delete_banner" data-id="{{ $service_categories->id }}" type="submit" class="close closeImgdiv" href="{{ route('services.category.destroyBannerImage', $service_categories->id) }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
         viewBox="0 0 18 18">
        <g transform="translate(-642 -792)">
            <circle cx="9" cy="9" r="9" transform="translate(642 792)"
                    fill="#ff6767"></circle>
            <g transform="translate(647.17 797.205)">
                <g transform="translate(0 0)">
                    <line x2="7.442" y2="7.442" fill="none"
                          stroke="#fff" stroke-linecap="round"
                          stroke-width="2"></line>
                    <line x1="7.442" y2="7.442" fill="none"
                          stroke="#fff" stroke-linecap="round"
                          stroke-width="2"></line>
                </g>
            </g>
        </g>
    </svg>
</a>--}}
