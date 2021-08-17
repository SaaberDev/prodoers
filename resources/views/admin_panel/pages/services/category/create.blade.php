@extends('admin_panel.layouts.app')
@section('title', 'Add Services Category')

@push('styles')
    {{-- Internal Styles --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/dropzone/css/dropzone.css') }}">
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
                        <h2 class="  m-0">Add New Service Category</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="{{ route('super_admin.service.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row m-0 justify-content-between py-3 bg-white rounded mt-4">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title</h5></label>
                            <div class="input-group">
                                <input name="service_category_title" class="form-control {{ $errors->has('service_category_title') ? ' is-invalid' : '' }}" value="{{ old('service_category_title') }}" type="text">
                                @if($errors->has('service_category_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_category_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Navbar Status --}}
                    <div class="col-md-2">
                        <div class=" ">
                            <label for="">
                                <h5>Navbar</h5></label>
                            <div class="">
                                <input id="navbar_status" name="navbar_status" value="{{ old('navbar_status') ?? 0 }}" {{ old('navbar_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class=" ">
                            <label for="">
                                <h5>Popular</h5></label>
                            <div class="">
                                <input name="category_popular" value="{{ old('category_popular') }}" {{ old('category_popular') == 1 ? 'checked='.'"'.'checked'.'"' : '' }}  id="category_popular" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class=" ">
                            <label for="">
                                <h5>Publish</h5></label>
                            <div class="">
                                <input name="category_status" value="{{ old('category_status') }}" {{ old('category_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} id="category_status" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group mb-0">
                            <div class="form-group">
                                <label for="">
                                    <h5>Meta Description</h5>
                                </label>
                                <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('meta_description') }}</textarea>
                                @if($errors->has('meta_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('meta_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                        <div class="col-md-6">
                            {{-- Banner Image --}}
                            <div class="form-group">
                                <label for="">
                                    <h5>Banner Image</h5>
                                </label>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="needsclick dropzone" id="single-media-dropzone-1">
                                                <div class="dz-message" data-dz-message>
                                                    <span>Drop files here or click to upload.</span> <br>
                                                    <span style="color: #dc3545;font-size: 13px;">Maximum allowed file size 2MB. Allowed file types are jpeg, png.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- Category Thumbnail --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">
                                    <h5>Category Thumbnail</h5>
                                </label>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="needsclick dropzone" id="single-media-dropzone-2">
                                                <div class="dz-message" data-dz-message>
                                                    <span>Drop files here or click to upload.</span> <br>
                                                    <span style="color: #dc3545;font-size: 13px;">Maximum allowed file size 2MB. Allowed file types are jpeg, png.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    <div class="col-md-12 mt-4">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="8">{{ old('service_description') }}</textarea>
                                @if($errors->has('service_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    {{-- Faqs --}}
                        <div class="col-md-12 py-3">
                            <!-- COMPONENT START -->
                            <div id="dynamic-field-faq-1" class="row dynamic-field-faq mb-3">
                                <div class="col-md-12">
                                    <label for="faqs-question-1"><h5>FAQ's<span class="ctm-required">*</span></h5></label>
                                    <input type="text" id="faqs-question-1" class="form-control validation-faqs" name="question[]" placeholder="">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <textarea type="text" id="faqs-answer-1" class="form-control validation-faqs" name="answer[]" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="button" id="remove-button-multiple" class="btn shadow bg-danger text-white rounded" disabled="disabled">Remove</button>
                                <button type="button" id="add-button-multiple" class="btn shadow bg-white rounded">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672" viewBox="0 0 12.672 12.672">
                                        <path d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z" transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg>
                                </span>
                                    Add new field
                                </button>
                            </div>
                        </div>
                    {{-- Faqs --}}


                    {{-- Features --}}
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="dynamic-field-1" class="dynamic-field mb-3">
                                        <label class="mr-3 mt-2" for="field-1"><h5>Features<span class="ctm-required">*</span></h5></label>
                                        <input type="text" id="field-1" name="features[]" value="{{ old('features.*') }}" class="form-control validation" aria-describedby="button-addon2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="button" id="remove-button-single" class="btn shadow bg-danger text-white rounded" disabled="disabled"> <span>
                                </span>Remove</button>
                                <button type="button" id="add-button-single" class="btn shadow bg-white rounded">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672" viewBox="0 0 12.672 12.672">
                                        <path d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z" transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg>
                                </span>
                                    Add new field
                                </button>
                            </div>
                        </div>
                    {{-- Features --}}



                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    {{-- Status Toggle --}}
    <script>
        $('#navbar_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

        $('#category_popular').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
            // console.log('isChecked: ' + isChecked);
        });

        $('#category_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });
    </script>

    {{-- Features --}}
    @include('plugins.dynamic-form.single_input')
    {{-- Faqs --}}
    @include('plugins.dynamic-form.multiple_input')

    <script src="{{ mix('_assets/plugins/dropzone/js/dropzone.js') }}"></script>
    {{-- Dropzone Service Thumb --}}
    @include('plugins.dropzone.create.single', [
        'dropzone' => Str::camel('single-media-dropzone-1'),
        'fileInputName' => 'single_media_1',
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'maxFilesize' => 2,
        'maxFiles' => 1,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])

    @include('plugins.dropzone.create.single', [
        'dropzone' => Str::camel('single-media-dropzone-2'),
        'fileInputName' => 'single_media_2',
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'maxFilesize' => 2,
        'maxFiles' => 1,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])
@endpush
