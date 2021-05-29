<div>
    <div class="boxshadow rounded">
        <div class="row justify-content-center m-0 py-1 boxshadow rounded">
            <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                <div class="">
                    <h2 class="  m-0">Total Orders</h2> </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 v-center">
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
            <div class="col-md-7">
                <div class="row">
                    @include('livewire.admin.includes.per_page_show')
                    @include('livewire.admin.includes.filter_by_status')
                </div>
            </div>
            <div class="col"></div>
            <div class="col-md-4">
                <!-- pagination -->
                @if($orders->total() > 4)
                    {{ $orders->links('vendor.livewire.designwala-pagination') }}
                @else
                @endif
            </div>
        </div>
    </div>

    <div class="SectionDataTable ">
        <div class="row m-0 py-3 bg-white rounded">
            <div class="col-md-12">
                <div class="designwalsDataTables text-center">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Assigned to</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Delivery Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td> Logo Design </td>
                                @foreach($order->payments as $payment)
                                <td> &#36;{{ $payment->paid_amount }} </td>
                                @endforeach
                                <td>5 / 3 days left || In Time || Late</td>
                                <td>
                                    @if($order->order_status === 'pending')
                                        <div class="tableDataLastButtonLiketab tabletabRED">
                                            <span class="">{{ $order_status['pending'] }}</span>
                                        </div>
                                    @elseif($order->order_status === 'ongoing')
                                        <div class="tableDataLastButtonLiketab tabletabLightSKY">
                                            <span class="">{{ $order_status['ongoing'] }}</span>
                                        </div>
                                    @elseif($order->order_status === 'delivered')
                                        <div class="tableDataLastButtonLiketab tabletabORANGE">
                                            <span class="">{{ $order_status['delivered'] }}</span>
                                        </div>
                                        {{--No color for in_revision--}}
                                    @elseif($order->order_status === 'in_revision')
                                        <div class="tableDataLastButtonLiketab tabletabLightSKY">
                                            <span class="">{{ $order_status['in_revision'] }}</span>
                                        </div>
                                        {{--No color for cancelled--}}
                                    @elseif($order->order_status === 'cancelled')
                                        <div class="tableDataLastButtonLiketab tabletabLightSKY">
                                            <span class="">{{ $order_status['cancelled'] }}</span>
                                        </div>
                                    @elseif($order->order_status === 'completed')
                                        <div class="tableDataLastButtonLiketab tabletabGREEN">
                                            <span class="">{{ $order_status['completed'] }}</span>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('orders.order.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39" viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                <path d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z" transform="translate(-6.305 -3.941)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr><td class="null_table" colspan="7">No Orders</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
