@extends('admin_panel.layouts.app')
@section('title', 'Edit Draft')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style"
         style="    background-color: #F5F5F5;">

        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-3 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="m-0">Edit Draft Mail</h2></div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <form action="">
                <div class="row m-0 justify-content-between py-3 bg-white rounded">
                    <div class="col-md-6 ">
                        <div class=" mb-0">
                            <label for=""><h5>eMail address</h5></label>
                            <div class="input-group">
                                <input name='emails' value='3'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for=""><h5>subject</h5></label>
                            <input class="form-control" type="text" placeholder="Default input">
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">

                        <label for=""><h5>description </h5></label>

                        <div class="row">
                            <div class="col-md-12">
                                <!--     <textarea id="default">Hello, World!</textarea>-->
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                          rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Send
                            </button>
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
        var inputElm = document.querySelector('input[name=emails]');

        var usersList = [
            {
                "value": 1,
                "name": "Justinian Hattersley",
                "avatar": "https://i.pravatar.cc/80?img=1",
                "email": "jhattersley0@ucsd.edu"
            },
            {
                "value": 2,
                "name": "Antons Esson",
                "avatar": "https://i.pravatar.cc/80?img=2",
                "email": "aesson1@ning.com"
            },
            {
                "value": 3,
                "name": "Ardeen Batisse",
                "avatar": "https://i.pravatar.cc/80?img=3",
                "email": "abatisse2@nih.gov"
            },
            {
                "value": 4,
                "name": "Graeme Yellowley",
                "avatar": "https://i.pravatar.cc/80?img=4",
                "email": "gyellowley3@behance.net"
            },
            {
                "value": 5,
                "name": "Dido Wilford",
                "avatar": "https://i.pravatar.cc/80?img=5",
                "email": "dwilford4@jugem.jp"
            },
            {
                "value": 6,
                "name": "Celesta Orwin",
                "avatar": "https://i.pravatar.cc/80?img=6",
                "email": "corwin5@meetup.com"
            },
            {
                "value": 7,
                "name": "Sally Main",
                "avatar": "https://i.pravatar.cc/80?img=7",
                "email": "smain6@techcrunch.com"
            },
            {
                "value": 8,
                "name": "Grethel Haysman",
                "avatar": "https://i.pravatar.cc/80?img=8",
                "email": "ghaysman7@mashable.com"
            },
            {
                "value": 9,
                "name": "Marvin Mandrake",
                "avatar": "https://i.pravatar.cc/80?img=9",
                "email": "mmandrake8@sourceforge.net"
            },
            {
                "value": 10,
                "name": "Corrie Tidey",
                "avatar": "https://i.pravatar.cc/80?img=10",
                "email": "ctidey9@youtube.com"
            }
        ]

        function tagTemplate(tagData) {
            return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div>
                <div class='tagify__tag__avatar-wrap'>
                    <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
        }

        function suggestionItemTemplate(tagData) {
            return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">
            ${tagData.avatar ? `
            <div class='tagify__dropdown__item__avatar-wrap'>
                <img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
            </div>` : ''
            }
            <strong>${tagData.name}</strong>
            <span>${tagData.email}</span>
        </div>
    `
        }

        // initialize Tagify on the above input node reference
        var tagify = new Tagify(inputElm, {
            enforceWhitelist: true,
            skipInvalid: true, // do not remporarily add invalid tags
            dropdown: {
                closeOnSelect: false,
                enabled: 0,
                classname: 'users-list',
                searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
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

        function onDropdownShow(e) {
            var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

            if (tagify.suggestedListItems.length > 1) {
                addAllSuggestionsElm = getAddAllSuggestionsElm();

                // insert "addAllSuggestionsElm" as the first element in the suggestions list
                dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
            }
        }

        function onSelectSuggestion(e) {
            if (e.detail.elm === addAllSuggestionsElm)
                tagify.dropdown.selectAll.call(tagify);
        }

        // create a "add all" custom suggestion element every time the dropdown changes
        function getAddAllSuggestionsElm() {
            // suggestions items should be based on "dropdownItem" template
            return tagify.parseTemplate('dropdownItem', [{
                    class: "addAll",
                    name: "Add all",
                    email: tagify.settings.whitelist.reduce(function (remainingSuggestions, item) {
                        return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
                    }, 0) + " Members"
                }]
            )
        }
    </script>
@endpush
