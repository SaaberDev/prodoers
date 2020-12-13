@extends('admin_panel.layouts.app')
@section('title', 'page_name')

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
                        <h2 class="  m-0">Policies</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 py-3 boxshadow rounded">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">PRIVACY POLICIY </h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <!--                                                <textarea id="">Hello, World!</textarea>-->

                            <!--                                                    <textarea id="default">Hello, World!</textarea>-->

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Cookie POLICIY </h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <!--                                                <textarea id="">Hello, World!</textarea>-->

                            <!--                                                    <textarea id="default">Hello, World!</textarea>-->

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Payment POLICIY </h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <!--                                                <textarea id="">Hello, World!</textarea>-->
                            <!--                                                    <textarea id="default">Hello, World!</textarea>-->

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">terms and conditions </h5></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <!--                                                <textarea id="">Hello, World!</textarea>-->
                            <!--                                                    <textarea id="default">Hello, World!</textarea>-->

                        </div>
                    </div>
                    <div class="col-md-12 py-4 text-right">
                        <button type="submit" class="btn bgOne text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
