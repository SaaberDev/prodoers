@extends('admin_panel.layouts.app')
@section('title', 'Services Category')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-8 col-sm-8  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
                <div class="col-md-4 col-sm-4  v-center">
                    <div class="text-right">
                        <a href="{{ route('services.category.create') }}" class="btn shadow bg-white rounded"> <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672" viewBox="0 0 12.672 12.672">
                                                <path d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z" transform="translate(-8.965 -8.965)" fill="#000"></path>
                                            </svg></span> Add new </a>
                    </div>
                </div>
            </div>
        </div>
        @livewire('services.category.index-component')
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
