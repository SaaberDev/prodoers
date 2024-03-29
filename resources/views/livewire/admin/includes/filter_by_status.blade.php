<div class="col-md-5"> Status
    <select wire:model="filterByStatus" class="custom-select custom-select-sm ">
        <option value="">All</option>
        @if($status == 'published_status')
            <option value="1">Published</option>
            <option value="0">Not Published</option>
        @elseif($status == 'subscriber_status')
            <option value="1">Subscriber</option>
            <option value="0">Not Subscriber</option>
        @elseif($status == 'order_status')
            <option value="pending">Not Assigned</option>
            <option value="ongoing">Ongoing</option>
            <option value="delivered">Delivered</option>
            <option value="in_revision">In Revision</option>
            <option value="cancelled">Cancelled</option>
            <option value="completed">Completed</option>
        @endif
    </select>
</div>
