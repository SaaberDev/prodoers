@extends('admin_panel.layouts.app')
@section('title', 'Subscribers')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>

        @livewire('admin.client.subscriber-index-component')
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    @include('alerts.admin_panel.delete_confirmation_modal')
@endpush
