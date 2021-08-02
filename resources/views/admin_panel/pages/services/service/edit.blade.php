@extends('admin_panel.layouts.app')
@section('title', 'Edit Service')

@push('styles')
    {{-- Internal Styles --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/dropzone/css/dropzone.css') }}">
    <style>
        .dropzone {
            min-height: 140px;
            background-color: #e8efe87a;
            padding: 0;
            border: 1px dashed #038D08!important;
        }

        .dropzone .dz-message {
            text-align: center;
            margin: 0;
            font-size: 16px;
        }

        .dropzone .dz-message .dz-button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            font-weight: 300;
        }

        .dropzone .dz-preview .dz-error-message {
            pointer-events: none;
            z-index: 1000;
            position: absolute;
            display: block;
            display: none;
            opacity: 0;
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
            border-radius: 8px;
            font-size: 13px;
            top: 150px;
            left: -10px;
            width: 140px;
            background: #be2626;
            background: linear-gradient(to bottom, #be2626, #a92222);
            padding: 0.5em 1.2em;
            color: white;
        }

        .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
            cursor: pointer;
            font-weight: 300;
            line-height: 40px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .dz-thumb {
            width: 100%;
            height: 100%;
            object-fit: contain!important;
        }
        .dropzone .dz-preview.dz-image-preview {
            background: transparent;
        }
    </style>
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

        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1  rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Edit Service </h2></div>
                </div>
            </div>
        </div>
        {{-- form--}}
        <div class="mt-4 py-3 bg-white rounded">
            <input type="hidden" name="service_id" value="{{ $services->id }}">
            {{-- New Service Form --}}
            <form action="{{ route('super_admin.service.self.update', $id) }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-between ">
                    {{-- Service Title --}}
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title </h5></label>
                            <div class="input-group">
                                <input name="service_title" value="{{ old('service_title') ? old('service_title') : $services->title }}" class="form-control {{ $errors->has('service_title') ? ' is-invalid' : '' }}" type="text" placeholder="">
                                @if($errors->has('service_title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Service Tags --}}
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Tags</h5></label>
                            <div class="input-group">

                                <input name="service_tags"
                                       value="@foreach($services->tags as $tag) {{ old('service_tags') ?? $tag->id }}, @endforeach"
                                       class="{{ $errors->has('service_tags') ? ' is-invalid' : '' }}"
                                       type="text"
                                       placeholder=""
                                >

                                @if($errors->has('service_tags'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- Popular Status --}}
                    <div class="col-md-3">
                        <div class=" ">
                            <label for="">
                                <h5>Popular</h5></label>
                            <div class="">
                                <input id="popular_status" name="popular_status" value="{{ old('popular_status') ? old('popular_status') : $services->popular_status }}" {{ (old('popular_status') ? old('popular_status') : $services->popular_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-md-3">
                        <div class=" ">
                            <label for="">
                                <h5>Publish</h5></label>
                            <div class="">
                                <input id="published_status" name="published_status" value="{{ old('published_status') ? old('published_status') : $services->published_status }}" {{ (old('published_status') ? old('published_status') : $services->published_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
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
                            <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="meta_description" rows="5">{{ old('meta_description') ? old('meta_description') : $services->meta_desc }}</textarea>
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
                                    <option value="{{ $service_category->id }}" {{ $service_category->id == $services->serviceCategories->id ? 'selected' : '' }}>{{ $service_category->title }}</option>
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
                                <input class="form-control {{ $errors->has('service_price') ? ' is-invalid' : '' }}" value="{{ old('service_price') ? old('service_price') : $services->price }}" name="service_price" placeholder="$" type="text">
                            </div>
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

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="needsclick dropzone" id="multiple-media-dropzone">
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


                    {{-- Service Thumbnail --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">
                                <h5>Service Thumbnail</h5>
                            </label>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="needsclick dropzone" id="single-media-dropzone">
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


                {{-- Features --}}
                <div class="row m-0 justify-content-between mt-4">
                    <div class="col-md-12">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="">
                                    <h5>features </h5> </label>
                                @forelse($services->serviceFeatures as $key => $service)
                                    <div id="dynamic-field-{{ $key + 1 }}" class="input-group dynamic-field mb-3">
                                        {{--<label class="mr-3 mt-2" for="field-1">Feature #1</label>--}}
                                        <input type="text" id="field-{{ $key + 1 }}" value="{{ $service->feature_desc }}" class="form-control validation" name="features[]" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <a type="button" data-action="{{ route('super_admin.service.self.destroyServiceFeature', $service->id) }}" class="btn sweet_delete p-0 m-0">
                                                <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <div id="dynamic-field-1" class="input-group dynamic-field mb-3">
                                        {{--<label class="mr-3 mt-2" for="field-1">Feature #1</label>--}}
                                        <input type="text" id="field-1" name="features[]" value="{{ old('features.*') }}" class="form-control validation" aria-describedby="button-addon2">
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div class="text-right">
                            <button type="button" id="remove-button-feature" class="btn shadow bg-danger text-white rounded" disabled="disabled"> <span>
                                    </span>Remove</button>
                            <button type="button" id="add-button-feature" class="btn shadow bg-white rounded"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672" viewBox="0 0 12.672 12.672">
                                        <path d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z" transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg></span> Add new field</button>
                        </div>
                    </div>
                </div>
                {{-- Features --}}

                <div class="row m-0 justify-content-between mt-4">
                    {{-- Description --}}
                    <div class="col-md-12">
                        <label for="">
                            <h5>description </h5></label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? ' is-invalid' : '' }}" rows="8">{{ old('service_description') ?? $services->service_desc }}</textarea>
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
                <div class="row m-0 justify-content-between">
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <h5>FAQ's</h5>
                        @forelse($services->serviceFaqs as $key => $faq)
                            <div id="dynamic-field-faq-{{ $key + 1 }}" class="row dynamic-field-faq">
                            <div class="col-md-12">
                                <div  class="input-group  mb-0">
                                    <input type="text" id="faqs-question-{{ $key + 1 }}" value="{{ $faq->question }}" class="form-control validation-faqs" name="question[]" placeholder="">
                                    <div class="input-group-append">
                                        <a type="button" data-action="{{ route('super_admin.service.self.destroyServiceFaq', $faq->id) }}" class="btn sweet_delete p-0 m-0">
                                            <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <textarea type="text" id="faqs-answer-{{ $key + 1 }}" class="form-control validation-faqs" name="answer[]" rows="5">{{ $faq->answer }}</textarea>
                                </div>
                            </div>
                        </div>
                        @empty
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
                        @endforelse
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
                </div>
                {{-- Faqs --}}

                <div class="col-md-12 py-4 ">
                    <div class="text-right">
                        <button type="submit" class="btn shadow bgOne rounded text-white px-4">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script src="{{ mix('_assets/plugins/dropzone/js/dropzone.js') }}"></script>
    {{-- Single Dynamic Input for Features Start --}}
    <script>
        $(document).ready(function() {
            var buttonAdd = $("#add-button-feature");
            var buttonRemove = $("#remove-button-feature");
            var className = ".dynamic-field";
            var count = 0;
            var field = "";
            var maxFields = 50;

            function totalFields() {
                return $(className).length;
            }

            function addNewField() {
                count = totalFields() + 1;
                field = $("#dynamic-field-1").clone();
                field.attr("id", "dynamic-field-" + count);
                field.children("label").text("Feature #" + count);
                field.children("input").attr("id", "field-" + count);
                // field.children("input").attr("name", "features." + count);
                field.find("input").val("");
                $(className + ":last").after($(field));
            }

            function removeLastField() {
                if (totalFields() > 1) {
                    $(className + ":last").remove();
                }
            }

            function enableButtonRemove() {
                if (totalFields() > 1) {
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
            $(".validation").each(function() {
                var data = $(this).val();
                var id  =  $(this).attr('id');

                if(Trim(data) === ''){
                    $(".validation").each(function(e) {
                        $("#" + id).addClass('is-invalid').focus();
                        e.preventDefault();
                        return false;
                    });
                }
                else{
                    $("#"+id).removeClass('is-invalid');
                }
            });
            // $(this).unbind('submit').submit();
            function Trim(value) {
                return value.replace(/^\s+|\s+$/g, '');
            }
        });
    </script>
    {{-- Single Dynamic Input for Features End --}}

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
                if (totalFields() > 1) {
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


    <script>
        // $('.select2').select2()
        $("#allCategories").select2();

        $('#popular_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

        $('#published_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

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

        /*
        *  Tagify for Service Tags
        * */
        var inputElm = document.querySelector('input[name=service_tags]');

        var usersList = [
            @foreach($service_tags as $service_tag)
            {
                "value": {{ $service_tag->id }},
                "name": "{{ $service_tag->title }}",
            },
            @endforeach
        ]

        function tagTemplate(tagData){
            return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
        }

        function suggestionItemTemplate(tagData){
            return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            <strong>${tagData.name}</strong>
        </div>
    `
        }

        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            tagTextProp: 'name', // very important since a custom template is used with this property as text. allows typing a "value" or a "name" to match input with whitelist
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            dropdown: {
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['value', 'name']  // very important to set by which keys to search for suggesttions when typing
            },
            templates: {
                tag: tagTemplate,
                dropdownItem: suggestionItemTemplate
            },
            whitelist: usersList
        })

        tagify.on('dropdown:show dropdown:updated', onDropdownShow)
        tagify.on('dropdown:select', onSelectSuggestion)

        var addAllSuggestionsElm;

        function onDropdownShow(e){
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if( tagify.suggestedListItems.length > 1 ){
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e){
            if( e.detail.elm == addAllSuggestionsElm )
                tagify.dropdown.selectAll.call(tagify);
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm(){
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                    class: "addAll",
                    name: "Add all",
                    email: tagify.settings.whitelist.reduce(function(remainingSuggestions, item){
                        return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                    }, 0) + " Members"
                }]
            )
        }

        // Dropzone Service Image
        var multipleUploadMap = {}
        Dropzone.options.multipleMediaDropzone = {
            url: '{{ route('super_admin.service.self.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: 'image/jpeg, image/png',
            addRemoveLinks: true,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            thumbnailMethod: 'contain',
            init: function () {
                let myDropzone = this;
                myDropzone.on("addedfile", function(file) {
                    $('.dz-image').last().find('img').addClass('dz-thumb')
                    // if (!file.type.match(/image.*/)) {
                    //     this.emit("thumbnail", file, "/_assets/_default/file_icon.png");
                    // }
                });

                @if(isset($services) && $services->getMedia('service'))
                var files = {!! json_encode($services->getMedia('service')) !!}
                for (var i in files) {
                    const file = files[i]
                    console.log(file)
                    this.options.addedfile.call(this, file)
                    if (file.extension === 'pdf') {
                        this.options.thumbnail.call(this, file, "{{ asset('_assets/_default/file_icon.png') }}")
                    } else {
                        this.options.thumbnail.call(this, file, file.original_url)
                    }
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="multiple_media[]" value="' + file.file_name + '">')
                    $('.dz-image').last().find('img').addClass('dz-thumb')

                    // let fileCountOnServer = 4; // The number of files already uploaded
                    // myDropzone.options.maxFiles = myDropzone.options.maxFiles - fileCountOnServer;
                }
                @endif
            },
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="multiple_media[]" value="' + response.name + '">')
                multipleUploadMap[file.name] = response.name
            },
            removedfile: function (file) {

                var name = ''
                var uuid = ''

                if (typeof file.file_name !== 'undefined') {

                    name = file.file_name
                    uuid = file.uuid

                    Swal.fire({
                        title: "Are you sure ?",
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: 'rgb(0 0 0)',
                        cancelButtonColor: 'rgb(204 75 75)',
                        background: 'rgb(235 246 236)',
                        confirmButtonText: 'Yes, delete it!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'DELETE',
                                url: '{{ route('super_admin.service.self.deleteMedia') }}',
                                data: {
                                    multiple_media: name,
                                    uuid: uuid
                                },
                                success: function (response) {
                                    file.previewElement.remove()
                                    $('form').find('input[name="multiple_media[]"][value="' + name + '"]').remove()
                                }
                            });
                        }
                        return false;
                    })
                } else {
                    name = multipleUploadMap[file.name]

                    file.previewElement.remove()
                    $('form').find('input[name="multiple_media[]"][value="' + name + '"]').remove()
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: '{{ route('super_admin.service.self.deleteMedia') }}',
                        data: {
                            multiple_media: name,
                        },
                    });
                }
            }
        }

        // Dropzone Service Thumb
        var singleUploadMap = {}
        Dropzone.options.singleMediaDropzone = {
            url: '{{ route('super_admin.service.self.storeMedia') }}',
            maxFilesize: 2, // MB
            maxFiles: 1,
            uploadMultiple: false,
            acceptedFiles: 'image/jpeg, image/png',
            addRemoveLinks: true,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            thumbnailMethod: 'contain',
            init: function () {

                // Data fetch
                @if(isset($services) && $services->getMedia('service_thumb'))
                var files = {!! json_encode($services->getMedia('service_thumb')) !!}
                for (var i in files) {
                    const file = files[i]

                    this.options.addedfile.call(this, file)
                    if (file.extension === 'pdf') {
                        this.options.thumbnail.call(this, file, "{{ asset('_assets/_default/file_icon.png') }}")
                    } else {
                        this.options.thumbnail.call(this, file, file.original_url)
                    }

                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="single_media" value="' + file.file_name + '">')
                    $('.dz-image').last().find('img').addClass('dz-thumb')
                }
                @endif

                // Single upload validation
                let myDropzone = this;
                myDropzone.on("addedfile", function(file) {
                    $('.dz-image').last().find('img').addClass('dz-thumb')
                    var maxFiles = 1;
                    var existing = Object.keys(files).length

                    if (maxFiles === existing) {
                        const Toast = Swal.mixin({
                            toast: true,
                            // position: 'bottom-left',
                            position: 'top-right',
                            showConfirmButton: false,
                            showCloseButton: true,
                            showClass: {
                                popup: 'swal2-show',
                                backdrop: 'swal2-backdrop-show',
                                icon: 'swal2-icon-show',
                            },
                            hideClass: {
                                popup: 'swal2-hide',
                                backdrop: 'swal2-backdrop-hide',
                                icon: 'swal2-icon-hide'
                            },
                            customClass: 'swal-toast-height',
                            // background: '#E9EFE8'
                            background: 'rgb(244 255 244)'
                        })
                        Toast.fire({
                            icon: 'warning',
                            title: "Delete the first one to upload new image."
                        })
                        myDropzone.removeFile(file);
                    }
                });
            },
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="single_media" value="' + response.name + '">')
                singleUploadMap[file.name] = response.name
            },
            removedfile: function (file) {
                var name = ''
                var uuid = ''

                if (typeof file.file_name !== 'undefined') {

                    name = file.file_name
                    uuid = file.uuid

                    Swal.fire({
                        title: "Are you sure ?",
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: 'rgb(0 0 0)',
                        cancelButtonColor: 'rgb(204 75 75)',
                        background: 'rgb(235 246 236)',
                        confirmButtonText: 'Yes, delete it!',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'DELETE',
                                url: '{{ route('super_admin.service.self.deleteMedia') }}',
                                data: {
                                    single_media: name,
                                    uuid: uuid
                                },
                                success:function(response) {
                                    file.previewElement.remove()
                                    $('form').find('input[name="single_media"][value="' + name + '"]').remove()
                                    window.location.reload()
                                }
                            });
                        }
                        return false;
                    })
                } else {

                    name = singleUploadMap[file.name]

                    file.previewElement.remove()
                    $('form').find('input[name="single_media"][value="' + name + '"]').remove()
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: '{{ route('super_admin.service.self.deleteMedia') }}',
                        data: {
                            single_media: name
                        },
                    });
                }

            }
        }
    </script>
    @include('alerts.admin_panel.delete_confirmation_modal')
@endpush
