@extends('admin_panel.layouts.app')
@section('title', 'Update Services Category')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!--                              breadcrumb-->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Edit Service Category</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="{{ route('services.category.update', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-between py-3 bg-white rounded mt-4">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title</h5></label>
                            <div class="input-group">
                                <input name="service_category_title" class="form-control {{ $errors->has('service_category_title') ? ' is-invalid' : '' }}" value="{{ old('service_category_title') ? old('service_category_title') : $service_categories->title }}" type="text">
                                @if($errors->has('service_category_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_category_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <label for="">
                                <h5>Popular Category</h5></label>
                            <div class="">
                                <input name="category_popular" value="{{ old('category_popular') ? old('category_popular') : $service_categories->popular_status }}" {{ (old('category_popular') ? old('category_popular') : $service_categories->popular_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }}  id="category_popular" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <label for="">
                                <h5>Status</h5></label>
                            <div class="">
                                <input name="category_status" value="{{ old('category_status') ? old('category_status') : $service_categories->published_status }}" {{ (old('category_status') ? old('category_status') : $service_categories->published_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }} id="category_status" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group mb-0">
                            <div class="form-group">
                                <label for="">
                                    <h5>meta description </h5></label>
                                <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('meta_description') ? old('meta_description') : $service_categories->meta_desc }}</textarea>
                                @if($errors->has('meta_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('meta_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="">
                                <h5>banner image </h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       name="old_banner_image"
                                       value="{{ old('banner_image') ? old('banner_image') : $service_categories->category_banner }}"
                                       class="form-control {{ $errors->has('banner_image') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       readonly
                                />

                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type='file'
                                               name="banner_image"
                                               class="upload up"
                                        />
                                    </span>
                                </div>
                                @if($errors->has('banner_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('banner_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class="previewImg">
                                        <img id="previewImg" class="img-thumbnail" src="{{ asset('storage/admin_panel/services_categories/banner/' . $service_categories->category_banner) }}" alt="{{ $service_categories->title }}">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="">
                                <h5>category thumbnail </h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       name="old_thumbnail_image"
                                       value="{{ old('thumbnail_image') ? old('thumbnail_image') : $service_categories->category_thumbnail }}"
                                       class="form-control {{ $errors->has('thumbnail_image') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       readonly
                                />

                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type='file'
                                               name="thumbnail_image"
                                               class="upload up"
                                        />
                                    </span>
                                </div>
                                @if($errors->has('thumbnail_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('thumbnail_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-4 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class="previewImg">
                                        <img id="previewImg" class="img-thumbnail" src="{{ asset('storage/admin_panel/services_categories/thumbnail/' . $service_categories->category_thumbnail) }}" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="8">{{ old('service_description') ? old('service_description') : $service_categories->desc }}</textarea>
                                @if($errors->has('service_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Status Toggle --}}
    <script>
        $('#category_popular').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
            // console.log('isChecked: ' + isChecked);
        });

        $('#category_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

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
{{--    @include('alerts.admin_panel.delete_confirmation_modal')--}}
@endpush
