@extends('admin_panel.layouts.app')
@section('title', 'Blog Section')

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
                        <h2 class="m-0">Blog Section</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('settings.site_cms.blog_section.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Headline</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('blog_headline') ? ' is-invalid' : '' }}" value="{{ getKey('blog_headline') }}" name="blog_headline" type="text" placeholder="">
                                        @if($errors->has('blog_headline'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('blog_headline') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group mt-4 mb-0">
                                    <label for="">
                                        <h5>Tagline</h5></label>
                                    <div class="input-group">
                                        <input class="form-control {{ $errors->has('blog_tagline') ? ' is-invalid' : '' }}" value="{{ getKey('blog_tagline') }}" name="blog_tagline" type="text" placeholder="">
                                        @if($errors->has('blog_tagline'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('blog_tagline') }}</strong>
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
