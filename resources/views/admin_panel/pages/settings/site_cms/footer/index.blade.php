@extends('admin_panel.layouts.app')
@section('title', 'Footer')

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
                        <h2 class="m-0">Footer</h2></div>
                </div>
            </div>
        </div>

        @if($footer_content)
        <div class="mt-4">
            <form action="{{ route('settings.site_cms.footer.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    {{-- Footer Logo --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Footer Logo</h5>
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
                                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                                    <div class="previewimg">
                                                        <img id="previewImg" class="img-fluid" src="{{ asset($footer_content->logo ? config('designwala_paths.show.site_cms.brand_logo') . $footer_content->logo : config('designwala_paths.default.no_preview')) }}" alt="Designwala Logo">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    {{-- Payment method image --}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">
                                                <h5>Payment Method</h5>
                                            </label>
                                            <div class="input-group">
                                                <input type='text'
                                                       name="payment_method"
                                                       class="form-control {{ $errors->has('payment_method') ? ' is-invalid' : '' }}"
                                                       onchange="preview(this);"
                                                       placeholder="No File Chosen"
                                                       readonly
                                                />

                                                <div class="input-group-btn">
                                                    <span class="fileUpload btn btnOne">
                                                        <span class="upl" id="upload">Choose</span>
                                                        <input type="file"
                                                               name="payment_method"
                                                               class="upload up"
                                                        />
                                                    </span>
                                                </div>
                                                @if($errors->has('payment_method'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('payment_method') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mt-4 border">
                                            <ul class="row list-unstyled previewimg">
                                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                                    <div class="previewimg">
                                                        <img id="previewImg" class="img-fluid" src="{{ asset($footer_content->payment_method ? config('designwala_paths.show.site_cms.payment_method') . $footer_content->payment_method : config('designwala_paths.default.no_preview')) }}" alt="Payment Method">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">
                                    <h5>Company Short Description </h5></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control {{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" rows="8">{{ $footer_content->desc }}</textarea>
                                        @if($errors->has('desc'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('desc') }}</strong>
                                            </span>
                                        @endif
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
        @else
            <div class="mt-4">
                <div style="font-size: 30px;text-align: center;height: 60vh;display: flex;align-items: center;">
                    <p>This site has static data. Please run seeders to make changes or contact your
                        <strong><a href="https://facebook.com/saaberdev" target="_blank">Developer</a></strong>.
                    </p>
                </div>
            </div>
        @endif
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
