@extends('admin_panel.layouts.app')
@section('title', 'Add Service')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!--                              breadcrumb -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>

        <!--                            page title -->
        <!--                            page title -->
        <!--                            page title -->
        <!--                            page title -->
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1  rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Add New Service </h2></div>
                </div>
            </div>
        </div>
        <!--                            form -->
        <!--                            form -->
        <!--                            form -->
        <!--                            form -->
        <div class="mt-4 py-3 bg-white rounded">
            <form action="{{ route('services.service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row m-0 justify-content-between ">
                    <div class="col-md-6">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title </h5></label>
                            <div class="input-group">
                                <input name="service_title" value="{{ old('service_title') }}" class="form-control {{ $errors->has('service_title') ? ' is-invalid' : '' }}" type="text" placeholder="">
                                @if($errors->has('service_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <label for="">
                                <h5>status </h5></label>
                            <div class="">
                                <input id="published_status" name="published_status" value="{{ old('published_status') }}" {{ old('published_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row m-0 justify-content-between mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h5>meta description </h5></label>
                            <textarea name="meta_description" class="form-control" id="meta_description" rows="5">{{ old('meta_description') }}</textarea>
                            @if($errors->has('meta_description'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('meta_description') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categories</label>
                            <select id="allCategories" name="allCategories[]" class="js-states form-control {{ $errors->has('allCategories') ? ' is-invalid' : '' }}" data-placeholder="categories" multiple>
                                @foreach($service_categories as $service_category)
                                    <option value="{{ $service_category->id }}" {{ in_array($service_category->id, old('allCategories') ?: []) ? 'selected' : '' }}>{{ $service_category->title }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('allCategories'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('allCategories') }}</strong>
                                </span>
                            @endif
                            <style>
                                .select2 {
                                    width: 100% !important;
                                }
                            </style>
                        </div>
                        <div class="form-group mb-0 mt-4">
                            <label for="">
                                <h5>price </h5></label>
                            <div class="input-group">
                                <input name="service_price" class="form-control" type="text" placeholder="$50"></div>
                        </div>
                    </div>
                </div>

                <div class="row m-0 justify-content-around mt-4 ">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h5>Service Image</h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       value="{{ old('service_image') }}"
                                       class="form-control {{ $errors->has('service_image') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       readonly
                                />

                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type='file'
                                               name="service_image"
                                               value="{{ old('service_image') }}"
                                               class="upload up"
                                        />
                                    </span>
                                </div>
                                @if($errors->has('service_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h5>Service Thumbnail</h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       class="form-control {{ $errors->has('service_thumbnail') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       readonly
                                />

                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type='file'
                                               name="service_thumbnail"
                                               value="{{ old('service_thumbnail') }}"
                                               class="upload up"
                                        />
                                    </span>
                                </div>
                                @if($errors->has('service_thumbnail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_thumbnail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Features --}}
                <div class="row m-0 justify-content-between mt-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">
                                    <h5>features #1 </h5></label>
                                <div class="form-group mb-0">
                                    <input name="service_features.1" class="form-control {{ $errors->has('service_features.1') ? ' is-invalid' : '' }}" type="text" placeholder="">
                                    @if($errors->has('service_features.1'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('service_features.1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">
                                    <h5>features #2 </h5></label>
                                <div class="input-group mb-3">
                                    <input type="text" name="service_feature.2" class="form-control {{ $errors->has('service_feature.2') ? ' is-invalid' : '' }}" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    @if($errors->has('service_feature.2'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('service_feature.2') }}</strong>
                                        </span>
                                    @endif
                                    <div class="input-group-append">
                                        <button class="btn p-0 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38.173" height="38.173"
                                                 viewBox="0 0 38.173 38.173">
                                                <path
                                                    d="M34.9,20.49H24.515V10.6a1.724,1.724,0,0,0-3.444,0V20.49H10.687a1.687,1.687,0,0,0-1.722,1.639,1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481H21.071v9.886a1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481,1.687,1.687,0,0,0,1.722-1.639V23.768H34.9a1.641,1.641,0,1,0,0-3.278Z"
                                                    transform="translate(18.617 -12.678) rotate(45)"
                                                    fill="#141414"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="text-right">
                            <button type="button" class="btn shadow bg-white rounded"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672"
                                         viewBox="0 0 12.672 12.672">
                                        <path
                                            d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                            transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg></span> Add new field
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Features --}}

                <div class="row m-0 justify-content-between mt-4">
                    <div class="col-md-12">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="service_description" class="form-control" rows="8"></textarea>
                                @if($errors->has('service_thumbnail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_thumbnail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row m-0 justify-content-between">
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <h5>FAQ #2 </h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <input name="service_faq.1" class="form-control" type="text" placeholder="">
                                    @if($errors->has('service_thumbnail'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_thumbnail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="5"></textarea>
                                    @if($errors->has('service_thumbnail'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_thumbnail') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <h5>FAQ #1 </h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn p-0 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38.173" height="38.173"
                                                 viewBox="0 0 38.173 38.173">
                                                <path
                                                    d="M34.9,20.49H24.515V10.6a1.724,1.724,0,0,0-3.444,0V20.49H10.687a1.687,1.687,0,0,0-1.722,1.639,1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481H21.071v9.886a1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481,1.687,1.687,0,0,0,1.722-1.639V23.768H34.9a1.641,1.641,0,1,0,0-3.278Z"
                                                    transform="translate(18.617 -12.678) rotate(45)"
                                                    fill="#141414"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="button" class="btn shadow bg-white rounded"> <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.672"
                                             height="12.672" viewBox="0 0 12.672 12.672">
                                            <path
                                                d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                                transform="translate(-8.965 -8.965)" fill="#000"></path>
                                        </svg></span> Add new field
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 py-4 ">
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
    <script>
        $("#allCategories").select2({
            placeholder: "Choose Categories"
            , allowClear: true
        });

        $('#published_status').change(function () {
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
@endpush
