@extends('admin_panel.layouts.app')
@section('title', 'Banners')

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
                        <h2 class="m-0">Banners</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="{{ route('super_admin.settings.site_cms.banner.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-12">
                        {{-- Home Page Banner --}}
                        @forelse($banners as $banner)
                        <div class="col-md-12 {{ $loop->first ? '' : 'mt-4' }}">
                            <label for="">
                                <h6>{{ str_replace('_', ' ', $banner->key) }}</h6>
                            </label>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mt-2 mb-0">
                                        <label for="">
                                            <h6>Headline</h6>
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control {{ $errors->has('headline.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $banner->headline }}" name="headline[]" type="text" placeholder="">
                                            @if($errors->has('headline.' . $loop->index))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('headline.' . $loop->index) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mt-2 mb-0">
                                        <label for="">
                                            <h5>Tagline</h5></label>
                                        <div class="input-group">
                                            <input class="form-control {{ $errors->has('tagline.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $banner->tagline }}" name="tagline[]" type="text" placeholder="">
                                            @if($errors->has('tagline.' . $loop->index))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('tagline.' . $loop->index) }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Home Page Banner --}}
                            <div class="form-group mt-4">
                                <label for="">
                                    <h5>Banner Image</h5>
                                </label>
                                <div class="input-group">
                                    <input type='text'
                                           name="banner[]"
                                           class="form-control {{ $errors->has('banner.' . $loop->index) ? ' is-invalid' : '' }}"
                                           onchange="preview(this);"
                                           placeholder="No File Chosen"
                                           readonly
                                    />

                                    <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="banner[]"
                                                       class="upload up"
                                                />
                                            </span>
                                    </div>
                                    @if($errors->has('banner.' . $loop->index))
                                        <span class="invalid-feedback">
                                                <strong>{{ $errors->first('banner.' . $loop->index) }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-4 border">
                                <ul class="row list-unstyled previewimg">
                                    <li class="col-md-7 text-center position-relative m-auto">
                                        <div class="previewimg">
                                            <img id="previewImg" class="img-fluid" src="{{ asset($banner->banner ? config('designwala_paths.show.site_cms.banner') . $banner->banner : config('designwala_paths.default.no_preview')) }}" alt="{{ ucwords(str_replace('_', ' ', $banner->key)) }}">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @empty
                            <div class="mt-4">
                                <div style="font-size: 30px;text-align: center;height: 60vh;display: flex;align-items: center;">
                                    <p>This site has static data. Please run seeders to make changes or contact your
                                        <strong><a href="https://facebook.com/saaberdev" target="_blank">Developer</a></strong>.
                                    </p>
                                </div>
                            </div>
                        @endforelse

                        @if(!$banners->count() == 0)
                        <div class="py-4 text-right">
                            <button type="submit" class="btn bgOne text-white">Update</button>
                        </div>
                        @else
                        @endif
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
