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
            <input type="hidden" name="service_id" value="{{ $service->id }}">
            {{-- New Service Form --}}
            <form action="{{ route('super_admin.service.self.update', $service->id) }}" method="POST" enctype="multipart/form-data" id="form">
                @csrf @method('PATCH')
                <div class="row m-0 justify-content-between ">
                    {{-- Service Title --}}
                    <div class="col-md-3">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title </h5></label>
                            <div class="input-group">
                                <input name="service_title" value="{{ old('service_title') ? old('service_title') : $service->title }}" class="form-control {{ $errors->has('service_title') ? ' is-invalid' : '' }}" type="text" placeholder="">
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
                                       value="{{ old('service_tags', $service_tags) }}"
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
                                <input id="popular_status" name="popular_status" value="{{ old('popular_status') ? old('popular_status') : $service->popular_status }}" {{ (old('popular_status') ? old('popular_status') : $service->popular_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="col-md-3">
                        <div class=" ">
                            <label for="">
                                <h5>Publish</h5></label>
                            <div class="">
                                <input id="published_status" name="published_status" value="{{ old('published_status') ? old('published_status') : $service->published_status }}" {{ (old('published_status') ? old('published_status') : $service->published_status) == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
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
                            <textarea name="meta_description" class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" id="meta_description" rows="5">{{ old('meta_description') ? old('meta_description') : $service->meta_desc }}</textarea>
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
                                    <option value="{{ $service_category->id }}" {{ $service_category->id == $service->serviceCategories->id ? 'selected' : '' }}>{{ $service_category->title }}</option>
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
                                <input class="form-control {{ $errors->has('service_price') ? ' is-invalid' : '' }}" value="{{ old('service_price') ? old('service_price') : $service->price }}" name="service_price" placeholder="$" type="text">
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
                                @livewire('admin.services.service.feature-list', ['service' => $service])
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
                                <textarea name="service_description" class="form-control {{ $errors->has('service_description') ? ' is-invalid' : '' }}" rows="8">{{ old('service_description') ?? $service->service_desc }}</textarea>
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
                        @livewire('admin.services.service.faq-list', ['service' => $service])
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

        /*
        *  Tagify for Service Tags
        * */
        var inputElm = document.querySelector('input[name=service_tags]');

        var usersList = [
            @foreach($tags as $tag)
            {
                "value": {{ $tag->id }},
                "name": "{{ $tag->title }}",
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

    {{-- Features --}}
    @include('plugins.dynamic-form.single_input')
    {{-- Faqs --}}
    @include('plugins.dynamic-form.multiple_input')

    @include('alerts.admin_panel.delete_confirmation_modal')

    {{-- Dropzone --}}
    <script src="{{ mix('_assets/plugins/dropzone/js/dropzone.js') }}"></script>
    {{-- Service Image --}}
    @include('plugins.dropzone.edit.multiple', [
        'dropzone' => Str::camel('multiple-media-dropzone'),
        'getRequestParam' => 'service',
        'fileInputName' => 'multiple_media',
        'get' => route('super_admin.service.self.getMedia'),
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'model' => $service, // your model name for query
        'maxFilesize' => 2,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])

    {{-- Service Thumb --}}
    @include('plugins.dropzone.edit.single', [
        'dropzone' => Str::camel('single-media-dropzone'),
        'getRequestParam' => 'service_thumb',
        'fileInputName' => 'single_media',
        'get' => route('super_admin.service.self.getMedia'),
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'model' => $service, // your model name for query
        'maxFilesize' => 2,
        'maxFiles' => 1,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])
@endpush
