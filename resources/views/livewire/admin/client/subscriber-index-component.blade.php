<div>
    <div class="boxshadow rounded">
        <div class="row justify-content-center m-0 py-1 boxshadow rounded">
            <div class="col-md-9 v-center">
                <div class="">
                    <h2 class="  m-0">Subscribers</h2></div>
            </div>
            <div class="col-md-3 v-center">
                <div class="text-right">
                    <div class="adminPageDetailsSearch">
                        @include('livewire.admin.includes.search-component')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="row m-0 py-3">
            <div class="col-md-6">
                <div class="row">
                    @include('livewire.admin.includes.per_page_show')
                    @include('livewire.admin.includes.filter_by_status')
                </div>
            </div>
            <div class="col"></div>
            <div class="col-md-4">
                @if($subscribers->total() > 15)
                    {{ $subscribers->links('vendor.livewire.designwala-pagination') }}
                @else
                @endif
            </div>
        </div>
    </div>

    <div class="SectionDataTable ">
        <div class="row m-0 py-3 bg-white ">
            <div class="col-md-12">
                <div class="designwalsDataTables text-center">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Subscription Status</th>
                            <th scope="col">Subscription Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    @if($subscriber->isSubscriber())
                                        <div class="tableDataLastButtonLiketab  tabletabGREEN"><span class="">Subscriber</span></div>
                                    @else
                                        <div class="tableDataLastButtonLiketab  tabletabRED"><span class="">Not Subscriber</span></div>
                                    @endif
                                </td>
                                <td>{{ formatDMY($subscriber->created_at) }}</td>
                                <td>
                                    <div class="">
                                        <a data-action="{{ route('clients.subscribers.destroy', $subscriber->id) }}" class="sweet_delete btn m-0 p-0">
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
                            <tr><td class="null_table" colspan="7">No Subscribers</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
