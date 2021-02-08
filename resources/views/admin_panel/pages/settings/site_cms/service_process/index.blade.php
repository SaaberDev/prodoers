@extends('admin_panel.layouts.app')
@section('title', 'Brand Identity')

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
                        <h2 class="m-0">Services Process</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.site_cms.service_process.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            {{-- Service Process 1 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 1 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 1</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('service_process_title_1') ? ' is-invalid' : '' }}" value="{{ getKey('service_process_title_1') }}" name="service_process_title_1" type="text" placeholder="">
                                        @if($errors->has('service_process_title_1'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('service_process_title_1') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 1 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="service_process_image_1"
                                                   class="form-control {{ $errors->has('service_process_image_1') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="service_process_image_1"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('service_process_image_1'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('service_process_image_1') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('service_process_image_1') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('service_process_image_1') : config('designwala_paths.default.service_process_1')) }}" alt="Service Process Image 1">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- Service Process 2 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 2 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 2</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('brand_headline') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 2 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="home_page_banner"
                                                   class="form-control {{ $errors->has('home_page_banner') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="home_page_banner"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('home_page_banner'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('home_page_banner') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- Service Process 3 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 3 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 3</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('brand_headline') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 3 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="home_page_banner"
                                                   class="form-control {{ $errors->has('home_page_banner') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="home_page_banner"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('home_page_banner'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('home_page_banner') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            {{-- Service Process 4 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 4 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 4</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('brand_headline') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 4 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="home_page_banner"
                                                   class="form-control {{ $errors->has('home_page_banner') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="home_page_banner"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('home_page_banner'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('home_page_banner') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- Service Process 5 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 5 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 5</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('brand_headline') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 5 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="home_page_banner"
                                                   class="form-control {{ $errors->has('home_page_banner') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="home_page_banner"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('home_page_banner'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('home_page_banner') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- Service Process 6 --}}
                            <div class="col-md-4">
                                {{-- Service Process Title 6 --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Service Process 6</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                    <strong>{{ $errors->first('brand_headline') }}</strong>
                                </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Service Process Image 6 --}}
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <div class="input-group">
                                            <input type='text'
                                                   name="home_page_banner"
                                                   class="form-control {{ $errors->has('home_page_banner') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="home_page_banner"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('home_page_banner'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('home_page_banner') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <ul class="row list-unstyled previewimg">
                                            <li class="col-md-7 text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-4 text-right">
                            <button type="submit" class="btn bgOne text-white">Update</button>
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
        // Image input
        window.preview = function (input) {
            if (input.files && input.files[0]) {
                $(input.files).each(function () {
                    $("#previewImg").html("");
                    var reader = new FileReader();
                    reader.readAsDataURL(this);
                    reader.onload = function (e) {
                        $("#previewImg").append("<img class='previewpic' src='" + e.target.result + "'>");
                    }
                });
            }
        }
    </script>
@endpush
