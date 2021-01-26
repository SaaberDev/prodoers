@extends('admin_panel.layouts.app')
@section('title', 'Edit Social Links')

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
                        <h2 class="m-0">Social Links</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.footer_section.social_link.update', $social_links->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 py-3">
                                <!-- COMPONENT START -->
                                <div class="row">
                                    <div class="col-md-2 align-self-center">
                                        <div class="text-center socialmediaDelete" style="height: 80px; width: 80px;">
                                            <img id="previewImg" class="img-fluid" height="80" width="80" src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_links->social_icon) }}" alt="{{ $social_links->social_title }}">
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group mb-0">
                                            <label for="">
                                                <h5>Social Icon</h5>
                                            </label>
                                            <div class="input-group">
                                                <input type='text'
                                                       name="social_icon"
                                                       class="form-control {{ $errors->has('social_icon') ? ' is-invalid' : '' }}"
                                                       onchange="preview(this);"
                                                       placeholder="No File Chosen"
                                                       readonly
                                                />

                                                <div class="input-group-btn">
                                                    <span class="fileUpload btn btnOne">
                                                        <span class="upl" id="upload">Choose</span>
                                                        <input type="file"
                                                               name="social_icon"
                                                               class="upload up"
                                                        />
                                                    </span>
                                                </div>
                                                @if($errors->has('social_icon'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('social_icon') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Social Media Title</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('social_title') ? ' is-invalid' : '' }}" value="{{ $social_links->social_title }}" name="social_title" type="text" placeholder="">
                                        @if($errors->has('social_title'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('social_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Social Media Url</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('social_url') ? ' is-invalid' : '' }}" value="{{ $social_links->social_url }}" name="social_url" type="text" placeholder="">
                                        @if($errors->has('social_url'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('social_url') }}</strong>
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
