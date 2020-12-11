@extends('admin_panel.layouts.app')
@section('title', 'blog_title')

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
            <div class="row  m-0 py-1 boxshadow rounded">
                <div class="col-xl-2 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Blog</h2> </div>
                </div>
            </div>
        </div>
        <div class="py-4 mt-4 bg-white rounded">
            <div class="row m-0">
                <div class="col-md-12">
                    <h4>Meta Description</h4>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3" style="">
                        <div class="row no-gutters">
                            <div class="col-md-2"> <img src="https://picsum.photos/300/200" class="card-img" alt="..."> </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h2 class="card-title w-75">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. </h2>
                                    <h5>Blog Category</h5>
                                    <h6>By you - June 09, 2020 <span class="tableDataLastButtonLiketab  ml-5 tabletabGREEN px-4">Active</span></h6> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et.... read more</p>
                </div>
            </div>
            <div class="row m-0 d-flex justify-content-between ">

                <div class="col-md-4">
                    <h4>Tags</h4>
                    <div class="blogTags pt-4">
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Meta Tags</h4>
                    <div class="blogTags pt-4">
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                        <div class="tags rounded px-3 text-dark float-left">tags 1</div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12">
                    <h5>Comments and Replies</h5>
                    <div class="card mb-3 " style="border: none;">
                        <div class="row no-gutters">
                            <div class="col-md-1  ">
                                <div class="p-2 text-right"> <img src="img/devimg/headermanlogo.png" class="card-img" style="height: 50px;width: 50px;" alt="..."> </div>
                            </div>
                            <div class="col-md-11">
                                <div class="card-body p-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="">1 minute ago</small> <small class=""><span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.327" height="21.643" viewBox="0 0 24.327 21.643">
                                                                <path d="M12.164,21.643a1.427,1.427,0,0,1-.94-.353c-.983-.859-1.93-1.667-2.766-2.379l0,0a51.445,51.445,0,0,1-6.04-5.669A9.055,9.055,0,0,1,0,7.311,7.6,7.6,0,0,1,1.93,2.118,6.542,6.542,0,0,1,6.8,0,6.119,6.119,0,0,1,10.618,1.32a7.82,7.82,0,0,1,1.545,1.614A7.821,7.821,0,0,1,13.709,1.32,6.119,6.119,0,0,1,17.531,0,6.542,6.542,0,0,1,22.4,2.118a7.6,7.6,0,0,1,1.93,5.193,9.054,9.054,0,0,1-2.413,5.927,51.439,51.439,0,0,1-6.039,5.669c-.837.713-1.786,1.522-2.771,2.384a1.428,1.428,0,0,1-.94.353ZM6.8,1.425A5.132,5.132,0,0,0,2.978,3.084,6.185,6.185,0,0,0,1.425,7.311,7.618,7.618,0,0,0,3.51,12.329a50.625,50.625,0,0,0,5.867,5.494l0,0c.839.715,1.79,1.526,2.78,2.391,1-.867,1.949-1.679,2.789-2.4a50.638,50.638,0,0,0,5.866-5.493A7.619,7.619,0,0,0,22.9,7.311,6.185,6.185,0,0,0,21.35,3.084a5.132,5.132,0,0,0-3.818-1.659,4.726,4.726,0,0,0-2.951,1.022,6.915,6.915,0,0,0-1.644,1.9.9.9,0,0,1-1.545,0,6.909,6.909,0,0,0-1.644-1.9A4.726,4.726,0,0,0,6.8,1.425Zm0,0" transform="translate(0 0)" fill="red" />
                                                            </svg></span> 100 likes</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 ml-5" style="border: none;">
                        <div class="row no-gutters">
                            <div class="col-md-1  ">
                                <div class="p-2 text-right"> <img src="img/devimg/headermanlogo.png" class="card-img" style="height: 50px;width: 50px;" alt="..."> </div>
                            </div>
                            <div class="col-md-11">
                                <div class="card-body p-2">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="">1 minute ago</small> <small class=""><span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.327" height="21.643" viewBox="0 0 24.327 21.643">
                                                                <path d="M12.164,21.643a1.427,1.427,0,0,1-.94-.353c-.983-.859-1.93-1.667-2.766-2.379l0,0a51.445,51.445,0,0,1-6.04-5.669A9.055,9.055,0,0,1,0,7.311,7.6,7.6,0,0,1,1.93,2.118,6.542,6.542,0,0,1,6.8,0,6.119,6.119,0,0,1,10.618,1.32a7.82,7.82,0,0,1,1.545,1.614A7.821,7.821,0,0,1,13.709,1.32,6.119,6.119,0,0,1,17.531,0,6.542,6.542,0,0,1,22.4,2.118a7.6,7.6,0,0,1,1.93,5.193,9.054,9.054,0,0,1-2.413,5.927,51.439,51.439,0,0,1-6.039,5.669c-.837.713-1.786,1.522-2.771,2.384a1.428,1.428,0,0,1-.94.353ZM6.8,1.425A5.132,5.132,0,0,0,2.978,3.084,6.185,6.185,0,0,0,1.425,7.311,7.618,7.618,0,0,0,3.51,12.329a50.625,50.625,0,0,0,5.867,5.494l0,0c.839.715,1.79,1.526,2.78,2.391,1-.867,1.949-1.679,2.789-2.4a50.638,50.638,0,0,0,5.866-5.493A7.619,7.619,0,0,0,22.9,7.311,6.185,6.185,0,0,0,21.35,3.084a5.132,5.132,0,0,0-3.818-1.659,4.726,4.726,0,0,0-2.951,1.022,6.915,6.915,0,0,0-1.644,1.9.9.9,0,0,1-1.545,0,6.909,6.909,0,0,0-1.644-1.9A4.726,4.726,0,0,0,6.8,1.425Zm0,0" transform="translate(0 0)" fill="red" />
                                                            </svg></span> 100 likes</small></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row justify-content-end">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">content</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
