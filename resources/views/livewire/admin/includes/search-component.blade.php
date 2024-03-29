<div class="input-group ">
    <input wire:model="search"
           type="text"
           class="form-control"
           placeholder="Search here"
           aria-label="search"
    >
    @if($search == true)
        <button wire:click="resetSearch()"
                type="button"
                class="btn bg-transparent"
                style="margin-left: -40px; z-index: 100;"
        >
            <i class="fa fa-times"></i>
        </button>
    @endif
    <button class="btn"
            type="button"
            id="button-addon2"
    >
        <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164" viewBox="0 0 20.16 20.164">
            <path id="Path_42" data-name="Path 42" d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z" transform="translate(-0.05 0)" fill="#272d3b" /> </svg>
    </button>
</div>


