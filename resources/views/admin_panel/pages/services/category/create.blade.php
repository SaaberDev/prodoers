@extends('admin_panel.layouts.app')
@section('title', 'Add Services Category')

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
                        <h2 class="  m-0">Add New Service Category</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="{{ route('services.category.store') }}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <label for="">
                                <h5>Popular Category</h5></label>
                            <div class="">
                                <input name="category_popular" value="{{ old('category_popular') }}" {{ old('category_popular') == 1 ? 'checked='.'"'.'checked'.'"' : '' }}  id="category_popular" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-right v-center">
                        <div class=" ">
                            <label for="">
                                <h5>Status</h5></label>
                            <div class="">
                                <input name="category_status" value="{{ old('category_status') }}" {{ old('category_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} id="category_status" type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="form-group mb-0">
                            <div class="form-group">
                                <label for="">
                                    <h5>meta description </h5></label>
                                <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="5">{{ old('meta_description') }}</textarea>
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
                                       name="banner_image"
                                       value="{{ old('banner_image') }}"
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
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="form-group">
                            <label for="">
                                <h5>category thumbnail </h5>
                            </label>
                            <div class="input-group">
                                <input type='text'
                                       name="thumbnail_image"
                                       value="{{ old('thumbnail_image') }}"
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
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">

                                <!--                                             text editor-->
                                <!--                                             text editor-->
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? 'is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="8">{{ old('service_description') }}</textarea>
                                @if($errors->has('service_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_description') }}</strong>
                                    </span>
                                @endif
                                <!--                                             text editor-->
                                <!--                                             text editor-->
                            </div>
                        </div>
                    </div>
                    {{-- Faqs --}}
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <h5>FAQ's</h5>
                        <div id="dynamic-field-faq-1" class="row dynamic-field-faq">
                            <div class="col-md-12">
                                <div  class="form-group  mb-0">
                                    <input type="text" id="faqs-question-1" class="form-control validation-faqs" name="question[]" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea type="text" id="faqs-answer-1" class="form-control validation-faqs" name="answer[]" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="text-right">
                            <button type="button" id="remove-button-faq" class="btn shadow bg-danger text-white rounded" disabled="disabled"> <span>
                                    </span>Remove</button>
                            <button type="button" id="add-button-faq" class="btn shadow bg-white rounded"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672" viewBox="0 0 12.672 12.672">
                                        <path d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z" transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg></span> Add new field</button>
                        </div>
                    </div>
                    {{-- Faqs --}}
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
    {{-- Form Clone Dynamic Input for Faqs Start --}}
    <script>
        $(document).ready(function() {
            var buttonAdd = $("#add-button-faq");
            var buttonRemove = $("#remove-button-faq");
            var className = ".dynamic-field-faq";
            var count = 0;
            var field = "";
            var maxFields = 50;

            function totalFields() {
                return $(className).length;
            }

            function addNewField() {
                count = totalFields() + 1;
                field = $("#dynamic-field-faq-1").clone();
                field.attr("id", "dynamic-field-faq-" + count);
                field.children("label").text("Feature #" + count);
                field.find("input").attr("id", "faq-question-" + count);
                field.find("textarea").attr("id", "faq-answer-" + count);
                // field.find("input").attr("name", "faq.question." + count);
                // field.find("textarea").attr("name", "faq.answer." + count);
                field.find("input").val("");
                field.find("textarea").val("");
                $(className + ":last").after($(field));
            }

            function removeLastField() {
                if (totalFields() > 1) {
                    $(className + ":last").remove();
                }
            }

            function enableButtonRemove() {
                if (totalFields() === 2) {
                    buttonRemove.removeAttr("disabled");
                    buttonRemove.addClass("shadow-sm");
                }
            }

            function disableButtonRemove() {
                if (totalFields() === 1) {
                    buttonRemove.attr("disabled", "disabled");
                    buttonRemove.removeClass("shadow-sm");
                }
            }

            function disableButtonAdd() {
                if (totalFields() === maxFields) {
                    buttonAdd.attr("disabled", "disabled");
                    buttonAdd.removeClass("shadow-sm");
                }
            }

            function enableButtonAdd() {
                if (totalFields() === (maxFields - 1)) {
                    buttonAdd.removeAttr("disabled");
                    buttonAdd.addClass("shadow-sm");
                }
            }

            buttonAdd.click(function() {
                addNewField();
                enableButtonRemove();
                disableButtonAdd();
            });

            buttonRemove.click(function() {
                removeLastField();
                disableButtonRemove();
                enableButtonAdd();
            });
        });

        $("form").submit(function (e) {
            e.preventDefault();
            $(".validation-faqs").each(function() {
                var data = $(this).val();
                var id  =  $(this).attr('id');

                if(Trim(data) === ''){
                    $(".validation-faqs").each(function(e) {
                        $("#" + id).addClass('is-invalid').focus();
                        e.preventDefault();
                        return false;
                    });
                }else{
                    $("#"+id).removeClass('is-invalid');
                }
            });
            $(this).unbind('submit').submit();
            function Trim(value) {
                return value.replace(/^\s+|\s+$/g, '');
            }
        });

    </script>
    {{-- Form Clone Dynamic Input for Faqs End --}}

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
@endpush
