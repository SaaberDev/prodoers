@extends('admin_panel.layouts.app')
@section('title', 'How Designwala Works')

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
                        <h2 class="m-0">How Designwala Works</h2></div>
                </div>
            </div>
        </div>

        @if(!$how_designwala_works->count() == 0 && $how_designwala_works_video)
        <div class="mt-4">
            <form action="{{ route('super_admin.settings.site_cms.how_designwala_works.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-center py-3 bg-white rounded">
                    <div class="col-md-10">
                        <div class="row">
                            {{-- How designwala works --}}
                            @foreach($how_designwala_works as $how_designwala_work)
{{--                                <input name="haha" value="12">--}}
                                <div class="col-md-4 mt-4">
                                    {{-- Title --}}
                                    <div class="form-group">
                                        <label for="">
                                            <h5>Step {{ $loop->iteration }}</h5>
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control {{ $errors->has('designwala_title_.' . $loop->index) ? ' is-invalid' : '' }}" value="{{ $how_designwala_work->title }}" name="designwala_title_[]" type="text" placeholder="">
                                            @if($errors->has('designwala_title_.' . $loop->index))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('designwala_title_.' . $loop->index) }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <textarea class="form-control {{ $errors->has('designwala_desc_.' . $loop->index) ? ' is-invalid' : '' }}" name="designwala_desc_[]" rows="3">{{ $how_designwala_work->desc }}</textarea>
                                    @if($errors->has('designwala_desc_.' . $loop->index))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('designwala_desc_.' . $loop->index) }}</strong>
                                        </span>
                                    @endif

                                    {{-- Image --}}
                                    <div class="form-group mt-4 mb-0">
                                        <div class="form-group mt-4">
                                            <div class="input-group">
                                                <input type='text'
                                                       name="designwala_image_[]"
                                                       class="form-control {{ $errors->has('designwala_image_.' . $loop->index) ? ' is-invalid' : '' }}"
                                                       onchange="preview(this);"
                                                       placeholder="No File Chosen"
                                                       readonly
                                                />

                                                <div class="input-group-btn">
                                                    <span class="fileUpload btn btnOne">
                                                        <span class="upl" id="upload">Choose</span>
                                                        <input type="file"
                                                               name="designwala_image_[]"
                                                               class="upload up"
                                                        />
                                                    </span>
                                                </div>
                                                @if($errors->has('designwala_image_.' . $loop->index))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('designwala_image_.' . $loop->index) }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mt-4 border">
                                            <div class="row">
                                                <div class="col-md-7 v-center text-center position-relative m-auto">
                                                    <div class="previewimg">
                                                        <img id="previewImg" class="img-fluid" src="{{ asset($how_designwala_work->image ? config('image-location.show.site_cms.how_designwala_works') . $how_designwala_work->image : config('image-location.default.no_preview')) }}" alt="service process image {{ $loop->iteration }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <label for="">
                                            <h5>Video</h5>
                                        </label>
                                        <div class="input-group">
                                            <input type='text'
                                                   name="designwala_video"
                                                   class="form-control {{ $errors->has('designwala_video') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="designwala_video"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('designwala_video'))
                                                <span class="invalid-feedback">
                                                <strong>{{ $errors->first('designwala_video') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <div class="row">
                                            <div class="col-md-7 v-center text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    @if($how_designwala_works_video->video)
                                                    <video width="300" controls>
                                                        <source src="{{ asset($how_designwala_works_video->video ? config('image-location.show.site_cms.how_designwala_works_video') . $how_designwala_works_video->video : config('image-location.default.no_preview')) }}" type="video/mp4">
                                                    </video>
                                                    @else
                                                    <img id="previewImg" class="img-fluid" src="{{ asset(config('image-location.default.no_preview')) }}" alt="service process image">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group mt-4 mb-0">
                                    <div class="form-group mt-4">
                                        <label for="">
                                            <h5>Video Thumbnail</h5>
                                        </label>
                                        <div class="input-group">
                                            <input type='text'
                                                   name="designwala_video_thumbnail"
                                                   class="form-control {{ $errors->has('designwala_video_thumbnail') ? ' is-invalid' : '' }}"
                                                   onchange="preview(this);"
                                                   placeholder="No File Chosen"
                                                   readonly
                                            />

                                            <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Choose</span>
                                                <input type="file"
                                                       name="designwala_video_thumbnail"
                                                       class="upload up"
                                                />
                                            </span>
                                            </div>
                                            @if($errors->has('designwala_video_thumbnail'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('designwala_video_thumbnail') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-4 border">
                                        <div class="row">
                                            <div class="col-md-7 v-center text-center position-relative m-auto">
                                                <div class="previewimg">
                                                    <img id="previewImg" class="img-fluid" src="{{ asset($how_designwala_works_video->video_thumbnail ? config('image-location.show.site_cms.how_designwala_works_video') . $how_designwala_works_video->video_thumbnail : config('image-location.default.no_preview')) }}" alt="Designwala Video Thumbnail">
                                                </div>
                                            </div>
                                        </div>
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
