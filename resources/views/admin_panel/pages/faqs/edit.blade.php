@extends('admin_panel.layouts.app')
@section('title', 'Update FAQ')

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
                        <h2 class="  m-0">Update FAQ </h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 py-3 bg-white rounded">
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <h5>FAQ #1</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn p-0 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38.173" height="38.173"
                                                 viewBox="0 0 38.173 38.173">
                                                <path
                                                    d="M34.9,20.49H24.515V10.6a1.724,1.724,0,0,0-3.444,0V20.49H10.687a1.687,1.687,0,0,0-1.722,1.639,1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481H21.071v9.886a1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481,1.687,1.687,0,0,0,1.722-1.639V23.768H34.9a1.641,1.641,0,1,0,0-3.278Z"
                                                    transform="translate(18.617 -12.678) rotate(45)"
                                                    fill="#141414"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <h5>FAQ #2</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" placeholder=""></div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-right">
                            <button type="button" class="btn shadow bg-white rounded"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672"
                                         viewBox="0 0 12.672 12.672">
                                        <path
                                            d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                            transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg></span> Add new field
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4">Update</button>
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
