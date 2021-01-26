<div>
    <div class="boxshadow rounded">
        <div class="row justify-content-center m-0  boxshadow rounded">
            <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                <div class="">
                    <h2 class="  m-0">Social Links</h2> </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                <div class="text-right py-1">
                    <div class="adminPageDetailsSearch">
                        @include('livewire.admin.includes.search-component')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="selectsOptions">
        <div class="row m-0 py-3">
            <div class="col-md-6">
                <div class="row">
                    @include('livewire.admin.includes.per_page_show')
                </div>
            </div>
            <div class="col"></div>
            @if($social_links->total() > 5)
                {{ $social_links->links('vendor.livewire.designwala-pagination') }}
            @else
            @endif
        </div>
    </div>

    <div class="SectionDataTable mt-4">
        <div class="row m-0 py-3 bg-white rounded">
            <div class="col-md-12">
                <h5> social media links</h5>
                <div class="designwalsDataTables text-center">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">url</th>
                            <th scope="col">last updated</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($social_links as $social_link)
                            <tr>
                                <td><img src="{{ asset(config('designwala_paths.admin.images.show.footer.social_links') . $social_link->social_icon) }}" alt="" class="img-fluid" style="height: 25px;"> </td>
                                <td>{{ $social_link->social_title }}</td>
                                <td>{{ $social_link->social_url }}</td>
                                <td>{{ formatDMY($social_link->updated_at) }}</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('settings.footer_section.social_link.edit', $social_link->id) }}" class="btn p-0 m-0" data-toggle="tooltip" title="" data-original-title="view or edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322" viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907" transform="translate(0 -1.79)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                    <path d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z" transform="translate(-5.062 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a data-action="{{ route('settings.footer_section.social_link.destroy', $social_link->id) }}" class="sweet_delete btn m-0 p-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027">
                                                <path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td class="null_table" colspan="6">No Social Links</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
