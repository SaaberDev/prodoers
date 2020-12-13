@extends('admin_panel.layouts.app')
@section('title', 'Edit Role')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    {{--                    <!-- breadcrumb  -->--}}
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row  m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Edit Roles</h2></div>
                </div>

            </div>
        </div>
        <div class="row bg-white rounded m-0 mt-4 py-3  ">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="">Role Name</label>
                        <input type="text" value="edit_role" class="form-control" id="">
                    </div>
                </form>
            </div>
        </div>
        <div class="row bg-white rounded m-0 mt-4 py-5  justify-content-center">
            <div class="col-md-8 ">
                <div class="row">

                    {{--                    <!--                               toggle button -->--}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Create</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input id="toggle-event" type="checkbox" data-toggle="toggle">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <!--                               toggle button -->--}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>read</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input id="toggle-event" type="checkbox" data-toggle="toggle">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <!--                               toggle button -->--}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>update</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input id="toggle-event" type="checkbox" data-toggle="toggle">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <!--                               toggle button -->--}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Delete</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input id="toggle-event" type="checkbox" data-toggle="toggle">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                     <!--                               toggle button -->--}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Delete</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input id="toggle-event" type="checkbox" data-toggle="toggle">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <!--                               toggle button ends-->--}}
                </div>
            </div>

            <div class="col-md-8">

                <div class="text-center py-4">
                    <button type="button" class="btn bgOne text-white px-4 ">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
