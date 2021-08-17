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
                <div class="col-md-12 py-3 bg-white rounded">

                    <div class="row">
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
                                <label for="navbar_status">
                                    <h5>Navbar</h5></label>
                                <div class="">
                                    <input id="navbar_status" name="navbar_status" value="{{ old('navbar_status', 0) }}" {{ old('navbar_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class=" ">
                                <label for="category_popular">
                                    <h5>Popular</h5></label>
                                <div class="">
                                    <input name="category_popular" value="{{ old('category_popular', 0) }}" {{ old('category_popular') == 1 ? 'checked='.'"'.'checked'.'"' : '' }}  id="category_popular" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class=" ">
                                <label for="category_status">
                                    <h5>Publish</h5></label>
                                <div class="">
                                    <input name="category_status" value="{{ old('category_status', 0) }}" {{ old('category_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} id="category_status" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 mt-4">
                        {{-- Meta Description --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="meta_desc">
                                    <h5>Meta Description</h5>
                                </label>
                                <textarea id="meta_desc" name="meta_desc" class="form-control {{ $errors->has('meta_desc') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('meta_desc') }}</textarea>
                                @if($errors->has('meta_desc'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('meta_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Short Description --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">
                                    <h5>Short Description</h5>
                                </label>
                                <textarea name="short_desc" class="form-control {{ $errors->has('short_desc') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('short_desc') }}</textarea>
                                @if($errors->has('short_desc'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('short_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- Banner Image --}}
                        <div class="col-md-6">
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
                    </div>

                    <div class="row">
                        {{-- Faqs --}}
                        <div class="col-md-12 py-3">
                            <!-- COMPONENT START -->
                            <div id="dynamic-field-multiple-1" class="row dynamic-field-multiple mb-3">
                                <div class="col-md-12">
                                    <label for="field-1-1"><h5>FAQ's<span class="ctm-required">*</span></h5></label>
                                    <input type="text" id="field-1-1" class="form-control validation-multiple" name="question[]" placeholder="">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <textarea type="text" id="field-2-1" class="form-control validation-multiple" name="answer[]" rows="5"></textarea>
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
                    </div>

                    <div class="row">
                        {{-- Order Instructions --}}
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="dynamic-field-single-1" class="dynamic-field-single mb-3">
                                        <label class="mr-3 mt-2" for="field-1"><h5>Order Instructions<span class="ctm-required">*</span></h5></label>
                                        <input type="text" id="field-1" name="order_instructions[]" value="{{ old('order_instructions.*') }}" class="form-control validation-single" aria-describedby="button-addon2">
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
                        {{-- Order Instructions --}}
                    </div>

                    <div class="row p-0 mt-4">
                        {{-- Order Instruction Description --}}
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">
                                    <h5>Order Instruction Description</h5>
                                </label>
                                <textarea name="order_instruction_desc" class="form-control {{ $errors->has('order_instruction_desc') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('order_instruction_desc') }}</textarea>
                                @if($errors->has('order_instruction_desc'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('order_instruction_desc') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 py-4">
                            <div class="text-right">
                                <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Submit</button>
                            </div>
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
