@extends('admin_panel.layouts.app')
@section('title', 'Add Coupon')

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
                        <h2 class="  m-0">Add Coupon</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0  py-3 bg-white rounded">
                    <div class="col-md-5 mt-4">
                        <div class="form-group">
                            <label>Categories</label>
                            <select id="allCategories" class="js-states form-control" multiple>
                                <option>Create</option>
                                <option>Read</option>
                                <option>Update</option>
                                <option>Delete</option>
                            </select>
                            <style>
                                .select2 {
                                    width: 100% !important;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="form-group">
                            <label>Services</label>
                            <select id="allServices" class="js-states form-control" multiple>
                                <option>Create</option>
                                <option>Read</option>
                                <option>Update</option>
                                <option>Delete</option>
                            </select>
                            <style>
                                .select2 {
                                    width: 100% !important;
                                }

                            </style>
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class=" text-right">
                            <label for="">
                                <h5>status</h5></label>
                            <div class="">
                                <input id="published_status" name="published_status" value="{{ old('published_status') }}" {{ old('published_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title</h5></label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"></div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Code</h5></label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"></div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Start Date</h5></label>
                            <input type="date" class="form-control" id="" aria-describedby=""></div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>End Date</h5></label>
                            <input type="date" class="form-control" id="" aria-describedby=""></div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Type</h5></label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>All</option>
                                <option>Percentage</option>
                                <option>Amount</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>discount <span><small>(by percentage)</small></span></h5></label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"></div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>discount <span><small>(by amount)</small></span></h5></label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"></div>
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
    <script>
        $('#published_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

        $("#allCategories").select2({
            placeholder: "Choose Categories"
            , allowClear: true
        });

        $("#allServices").select2({
            placeholder: "Choose Services"
            , allowClear: true
        });
    </script>
@endpush
