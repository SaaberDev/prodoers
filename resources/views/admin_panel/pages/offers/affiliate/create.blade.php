@extends('admin_panel.layouts.app')
@section('title', 'Add Affiliate')

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
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Add Affiliate Coupon</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 justify-content-between py-3 bg-white rounded">
                    <div class="col-md-5">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Code</h5></label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>User</h5></label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>All</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class=" text-right">
                            <label for="">
                                <h5>status</h5></label>
                            <div class="">
                                <input id="toggle-event" type="checkbox" data-toggle="toggle">
                                <div id="console-event"></div>
                                <script>
                                    $(function () {
                                        $('#toggle-event').change(function () {
                                            $('#console-event').html('Toggle: ' + $(this).prop('checked'))
                                        })
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
