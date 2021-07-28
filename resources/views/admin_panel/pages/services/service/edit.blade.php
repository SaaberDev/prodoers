@extends('admin_panel.layouts.app')
@section('title', 'Edit Service')

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
                            <div class="input-group">
                                <input type='text'
                                       name="service_images[]"
                                       class="form-control {{ $errors->has('service_images.*') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       placeholder="No File Chosen"
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
                                @if($errors->has('service_images.*'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('service_images.*') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mt-4 border">
                            <ul class="row list-unstyled previewimg">
                                @foreach ($services->serviceImages as $service)
                                    <li class="col-md-4 py-4 text-center position-relative m-auto">
                                        <div class="previewimg">
                                            <img src="{{ asset($service_image . $service->filename) }}" alt="{{ $services->title }}" class="img-fluid">
                                            <a class="sweet_delete close closeImgdiv" data-action="{{ route('super_admin.service.self.destroyServiceImage', $service->id) }}" style="cursor: pointer; position: absolute;top: 10px; right: 27px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                    <g transform="translate(-642 -792)">
                                                        <circle cx="9" cy="9" r="9" transform="translate(642 792)" fill="#ff6767"></circle>
                                                        <g transform="translate(647.17 797.205)">
                                                            <g transform="translate(0 0)">
                                                                <line x2="7.442" y2="7.442" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
                                                                <line x1="7.442" y2="7.442" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"></line>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
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
                                       name="service_thumbnail"
                                       class="form-control {{ $errors->has('service_thumbnail') ? ' is-invalid' : '' }}"
                                       onchange="preview(this);"
                                       placeholder="No File Chosen"
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
                        <div class="mt-4 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class="previewimg">
                                        <img id="previewImg" class="img-fluid" src="{{ asset($thumbnail . $services->thumbnail) }}" alt="{{ $services->title }}">
                                    </div>
                                </li>
                            </ul>
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
    </script>
    @include('alerts.admin_panel.delete_confirmation_modal')
@endpush
