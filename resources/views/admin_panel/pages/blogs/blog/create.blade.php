@extends('admin_panel.layouts.app')
@section('title', 'Add New Blog')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
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
                        <h2 class="m-0">Add New Blog </h2> </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 justify-content-between py-3 bg-white rounded">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title </h5> </label>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Default input"> </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="">
                            <h5>Category </h5> </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>Percentage</option>
                            <option>3</option>
                        </select>
                    </div>

                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <h5>status</h5>
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
                    <div class="col-md-6 mt-4">
                        <div class="form-group mb-0">
                            <div class="form-group">
                                <label for="">
                                    <h5>meta description </h5> </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="">
                                <h5>thumbnail image </h5> </label>


                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn">
                              <span class="fileUpload btn btnOne">
                                  <span class="upl" id="upload">Upload</span>
                                  <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                                </span>
                                </div>
                            </div>

                        </div>
                        <div class="mt-4 border">
                            <ul class="row list-unstyled previewimg">

                                <li class="col-md-4 py-4 text-center position-relative m-auto"><div class="">
                                        <img src="img/devimg/rectangle.png" alt=""> <a class="close closeImgdiv" href="#" style="    position: absolute;
    top: 11px;
    right: 18px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><g transform="translate(-642 -792)"><circle cx="9" cy="9" r="9" transform="translate(642 792)" fill="#ff6767"></circle><g transform="translate(647.17 797.205)"><g transform="translate(0 0)"><line x2="7.442" y2="7.442" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line><line x1="7.442" y2="7.442" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line></g></g></g></svg></a>
                                    </div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>tag </h5> </label>
                            <input name='tags' value='#logodesign'> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>meta tag </h5> </label>
                            <input name='meta_tag' class="tagify11v2" value='#logodesign'> </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">
                            <h5>description </h5> </label>
                        <div class="row">
                            <div class="col-md-12">
                                <!--                                                    <textarea id="default">Hello, World!</textarea>-->
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
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
    <script>
        // The DOM element you wish to replace with Tagify
        const tag = document.querySelector('input[name=tags]');
        const metaTag = document.querySelector('input[name=meta_tag]');
        // initialize Tagify on the above input node reference
        new Tagify(tag);
        new Tagify(metaTag);
    </script>
@endpush
