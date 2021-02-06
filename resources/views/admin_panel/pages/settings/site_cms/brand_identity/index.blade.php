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
                        <h2 class="m-0">Brand Identity</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.site_cms.brand_identity.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- Brand Headline --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Headline</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_headline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_headline') }}" name="brand_headline" type="text" placeholder="">
                                        @if($errors->has('brand_headline'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('brand_headline') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- Brand Tagline --}}
                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Tagline</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('brand_tagline') ? ' is-invalid' : '' }}" value="{{ getKey('brand_tagline') }}" name="brand_tagline" type="text" placeholder="">
                                        @if($errors->has('brand_tagline'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('brand_tagline') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                {{-- Home Page Banner --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Home Page Banner</h5>
                                    </label>
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
                                        <li class="col-md-4 py-4 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset(getKey('home_page_banner') ? config('designwala_paths.admin.images.show.brand_identity.home_page_banner') . getKey('home_page_banner') : config('designwala_paths.default.home_page_banner')) }}" alt="Home Page Banner">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                {{-- Brand Logo --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Brand Logo</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="brand_logo"
                                               class="form-control {{ $errors->has('brand_logo') ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                                <span class="fileUpload btn btnOne">
                                                    <span class="upl" id="upload">Choose</span>
                                                    <input type="file"
                                                           name="brand_logo"
                                                           class="upload up"
                                                    />
                                                </span>
                                        </div>
                                        @if($errors->has('brand_logo'))
                                            <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('brand_logo') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-4 py-4 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset(getKey('brand_logo') ? config('designwala_paths.admin.images.show.brand_identity.brand_logo') . getKey('brand_logo') : config('designwala_paths.default.brand_logo')) }}" alt="Brand Logo">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                {{-- Browser Favicon --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Browser Favicon</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="browser_favicon"
                                               class="form-control {{ $errors->has('browser_favicon') ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                                <span class="fileUpload btn btnOne">
                                                    <span class="upl" id="upload">Choose</span>
                                                    <input type="file"
                                                           name="browser_favicon"
                                                           class="upload up"
                                                    />
                                                </span>
                                        </div>
                                        @if($errors->has('browser_favicon'))
                                            <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('browser_favicon') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-4 py-4 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset(getKey('browser_favicon') ? config('designwala_paths.admin.images.show.brand_identity.browser_favicon') . getKey('browser_favicon') : config('designwala_paths.default.browser_favicon')) }}" alt="Browser Favicon">
                                            </div>
                                        </li>
                                    </ul>
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
