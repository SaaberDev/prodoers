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
        {{-- form--}}
        <div class="mt-4 py-3 bg-white rounded">
            {{-- New Service Form --}}
            <form action="{{ route('services.service.store') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="row m-0 justify-content-between ">
                    <div class="col-md-6">
                        {{-- Service Title --}}
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
                    {{-- Status --}}
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
                        {{-- Meta Description --}}
                        <div class="form-group">
                            <label for="">
                                <h5>meta description </h5></label>
                            <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="meta_description" rows="5">{{ old('meta_description') }}</textarea>
                            @if($errors->has('meta_description'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- Categories --}}
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="js-states select2 form-control {{ $errors->has('allCategories') ? ' is-invalid' : '' }}"
                                    data-placeholder="categories"
                                    id="allCategories"
                                    name="allCategories" style="width: 100%;">
                                <option selected="selected" disabled>Choose a category</option>
                                @foreach($service_categories as $service_category)
                                    <option value="{{ $service_category->id }}" {{ in_array($service_category->id, old('allCategories') ?: []) ? 'selected' : '' }}>{{ $service_category->title }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('allCategories'))
                                <span class="invalid-feedback">
                        <strong>{{ $errors->first('allCategories') }}</strong>
                    </span>
                            @endif
                        </div>
                        {{-- Price --}}
                        <div class="form-group mb-0 mt-4">
                            <label for="">
                                <h5>price </h5></label>
                            <div class="input-group">
                                <input class="form-control {{ $errors->has('service_price') ? ' is-invalid' : '' }}" value="{{ old('service_price') }}" name="service_price" placeholder="$" type="text"></div>
                            @if($errors->has('service_price'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('service_price') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row m-0 justify-content-around mt-4 ">
                    <div class="col-md-6">
                        {{-- Service Image --}}
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
                                   name="service_images[]"
                                   class="upload up"
                                   multiple
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
                    {{-- Service Thumbnail --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h5>Service Thumbnail</h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       class="form-control {{ $errors->has('service_thumbnail') ? ' is-invalid' : '' }}"
                                       value="{{ old('service_thumbnail') }}"
                                       onchange="preview(this);"
                                       readonly
                                />

                                <div class="input-group-btn">
                        <span class="fileUpload btn btnOne">
                            <span class="upl" id="upload">Choose</span>
                            <input type='file'
                                   name="service_thumbnail"
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
                @foreach(range(0, 5) as $input)
                <div class="row m-0 justify-content-between mt-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="features">
                                    <h5>features #{{ $loop->iteration }} </h5> </label>
                                <div class="form-group mb-0">
                                    <input class="form-control {{ $errors->has('features.'.$input) ? ' is-invalid' : '' }}" name="features[]" id="features.{{ $input }}" type="text" placeholder="">
                                    @if($errors->has('features.*'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('features.'.$input) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- Features --}}

                <div class="row m-0 justify-content-between mt-4">
                    {{-- Description --}}
                    <div class="col-md-12">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? ' is-invalid' : '' }}" rows="8">{{ old('service_description') }}</textarea>
                                @if($errors->has('service_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Faqs --}}
                @foreach(range(0, 5) as $input)
                <div class="row m-0 justify-content-between">
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <h5>FAQ #{{ $loop->iteration }} </h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <input class="form-control {{ $errors->has('faqs.question.'.$input) ? ' is-invalid' : '' }}" name="faqs.question[]" id="faqs.question.{{ $input }}" type="text" placeholder="">
                                    @if($errors->has('faqs.question.'.$input))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('faqs.question.'.$input) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea class="form-control {{ $errors->has('faqs.answer.'.$input) ? ' is-invalid' : '' }}" name="faqs.answer[]" id="faqs.answer.{{ $input }}" rows="5"></textarea>
                                    @if($errors->has('faqs.answer.'.$input))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('faqs.answer.'.$input) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-md-12 py-4 ">
                    <div class="text-right">
                        <button type="submit" class="btn shadow bgOne rounded text-white px-4">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        // $('.select2').select2()
        $("#allCategories").select2();

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
