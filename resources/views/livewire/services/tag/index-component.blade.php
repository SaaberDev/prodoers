<div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
    <div class="">
        <div class="row justify-content-center pb-3 m-0">
            <div class="col-md-12 col-sm-12  v-center">
                <!-- breadcrumb  -->
                @include('admin_panel.includes.breadcrumb')
            </div>
        </div>
    </div>
    <div class="boxshadow rounded">
        <div class="row justify-content-center m-0 py-1 boxshadow rounded">
            <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                <div class="">
                    <h2 class="m-0">Tags</h2></div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                <div class="text-right">
                    <div class="adminPageDetailsSearch">
                        @include('livewire.includes.search-component')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="selectsOptions">
        <div class="row m-0 py-3">
            <div class="col-md-6">
                <div class="row">
                    @include('livewire.includes.per_page_show')
                </div>
            </div>
            <div class="col"></div>
            <div class="col-md-4">
                <!-- pagination -->
                @if($tags->total() > 5)
                    {{ $tags->links('vendor.livewire.designwala-pagination') }}
                @else
                @endif
            </div>
        </div>
    </div>
    <div class="SectionDataTable ">
        <div class="row m-0 py-3 bg-white ">
            <div class="col-md-3">
                <div class="">
                    <div class="card" style="">
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
{{--                            <hr>--}}
                            <form action="{{ route('services.tag.store') }}" method="POST">
                                @csrf @method('POST')
                                <div class="form-group">
                                    <input type="text" name="tags" value="{{ old('tags') }}" class="tags {{ $errors->has('tags') ? 'is-invalid border-danger' : '' }}">
                                    @if($errors->has('tags'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn bgOne text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Table --}}
            <div class="col-md-9 ">
                <div class="designwalsDataTables text-center border">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Tags</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tags as $tag)
                        <tr>
                            <td>
                                <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark">
                                    <span class="">{{ $tag->title }}</span>
                                </div>
                            </td>

                            <td>
                                <div class="">
                                    <a href="{{ route('services.tag.edit', $tag->id) }}" class="btn p-0 m-0" data-toggle="tooltip" title=""
                                       data-original-title="view or edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322"
                                             viewBox="0 0 14.322 14.322">
                                            <g transform="translate(-2.5 -2.203)">
                                                <path
                                                    d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907"
                                                    transform="translate(0 -1.79)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z"
                                                    transform="translate(-5.062 0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a data-action="{{ route('services.tag.destroy', $tag->id) }}" class="sweet_delete btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                             viewBox="0 0 11.91 16.027">
                                            <path
                                                d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                transform="translate(-7 -3)" fill="none" stroke="#000"
                                                stroke-width="1"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr><td class="null_table" colspan="7">No Tags</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

