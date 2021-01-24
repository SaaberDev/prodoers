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
                        <h2 class="m-0">Footer</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.footer_section.footer.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">
                                        <h5>Footer Logo</h5>
                                    </label>
                                    <div class="input-group">
                                        <input type='text'
                                               name="footer_logo"
                                               {{--                                                   value="{{ getFooterKey('footer_logo') }}"--}}
                                               class="form-control {{ $errors->has('footer_logo') ? ' is-invalid' : '' }}"
                                               onchange="preview(this);"
                                               placeholder="No File Chosen"
                                               readonly
                                        />

                                        <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="footer_logo"
                                                       class="upload up"
                                                />
                                            </span>
                                        </div>
                                        @if($errors->has('footer_logo'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('footer_logo') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-4 border">
                                    <ul class="row list-unstyled previewimg">
                                        <li class="col-md-4 py-4 text-center position-relative m-auto">
                                            <div class="previewimg">
                                                <img id="previewImg" class="img-fluid" src="{{ asset(config('designwala_paths.admin.images.show.footer.logo') . getFooterKey('footer_logo')) }}" alt="{{ getFooterKey('footer_logo') }}">
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Copyright Text</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('copyright') ? ' is-invalid' : '' }}" value="{{ getFooterKey('copyright') }}" name="copyright" type="text" placeholder="">
                                        @if($errors->has('copyright'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('copyright') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">
                                    <h5>Footer Description </h5></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea class="form-control {{ $errors->has('footer_desc') ? ' is-invalid' : '' }}" name="footer_desc" rows="8">{{ getFooterKey('footer_desc') }}</textarea>
                                        @if($errors->has('footer_desc'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('footer_desc') }}</strong>
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
