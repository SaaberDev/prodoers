<div>
{{--    @if($isActive)--}}
{{--        <button type="button" wire:click="assign" class="btn shadow px-2 py-0">--}}
{{--            Assign--}}
{{--        </button>--}}
    {{ $status }}
    @if($status == 'pending')
        <button type="button" class="btn tabletabORANGE text-white px-2 py-0">
            Pending
        </button>
    @elseif($status == 'assigned')
        <button type="button" class="btn bgOne text-white px-2 py-0">
            Assigned
        </button>
    @elseif($status == 'cancelled')
        <button type="button" wire:click="assign" class="btn shadow tabletabRED px-2 py-0">
            Reassign
        </button>
    @elseif($status == 'done')
        <button type="button" wire:click="assign"  class="btn shadow px-2 py-0">
            Assign
        </button>
    @else
        <button type="button" wire:click="assign" class="btn shadow px-2 py-0">
            Assign
        </button>
    @endif
</div>
