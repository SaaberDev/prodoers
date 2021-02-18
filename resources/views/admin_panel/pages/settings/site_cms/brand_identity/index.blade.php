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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- Company Name --}}
                                <div class="form-group">
                                    <label for="">
                                        <h5>Company Name</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('company_name') ? ' is-invalid' : '' }}" value="{{ $brand_identities->company_name }}" name="company_name" type="text" placeholder="">
                                        @if($errors->has('company_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('company_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- Slogan --}}
                                <div class="form-group mb-0">
                                    <label for="">
                                        <h5>Slogan</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('slogan') ? ' is-invalid' : '' }}" value="{{ $brand_identities->slogan }}" name="slogan" type="text" placeholder="">
                                        @if($errors->has('slogan'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('slogan') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                {{-- Brand Logo --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Brand Logo</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="logo"
                                               class="form-control {{ $errors->has('logo') ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                                <span class="fileUpload btn btnOne">
                                                    <span class="upl" id="upload">Choose</span>
                                                    <input type="file"
                                                           name="logo"
                                                           class="upload up"
                                                    />
                                                </span>
                                        </div>
                                        @if($errors->has('logo'))
                                            <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('logo') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-7 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset($brand_identities->logo ? config('designwala_paths.show.site_cms.brand_logo') . $brand_identities->logo : config('designwala_paths.default.no_preview')) }}" alt="Brand Logo">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                {{-- Browser Favicon --}}
                                <div class="form-group mt-4">
                                    <label for="">
                                        <h5>Browser Favicon</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="favicon"
                                               class="form-control {{ $errors->has('favicon') ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                                <span class="fileUpload btn btnOne">
                                                    <span class="upl" id="upload">Choose</span>
                                                    <input type="file"
                                                           name="favicon"
                                                           class="upload up"
                                                    />
                                                </span>
                                        </div>
                                        @if($errors->has('favicon'))
                                            <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('favicon') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-7 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset($brand_identities->favicon ? config('designwala_paths.show.site_cms.brand_icon') . $brand_identities->favicon : config('designwala_paths.default.no_preview')) }}" alt="Browser Favicon">
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
