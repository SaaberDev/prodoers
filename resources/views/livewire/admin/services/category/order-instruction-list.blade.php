<div>
    @forelse($service_category->serviceCategoryInstructions as  $serviceCategoryInstruction)
        <div id="dynamic-field-single-{{ $loop->iteration }}" class="dynamic-field-single mb-3" wire:key="{{ $loop->index }}">
            <label class="mr-3 mt-2" for="field-{{ $loop->iteration }}">Order Instructions<span class="ctm-required">*</span></label>
            <div class="input-group-append">
                <input type="text" id="field-{{ $loop->iteration }}" value="{{ $serviceCategoryInstruction->order_instructions }}" class="form-control validation-single" name="order_instructions[]" aria-describedby="button-addon2">
                <a type="button" href="{{ route('super_admin.service.category.destroyInstruction', $serviceCategoryInstruction->id) }}" class="btn sweet_delete p-0 m-0">
                    <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                </a>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-md-12">
                <div id="dynamic-field-single-1" class="dynamic-field-single mb-3">
                    <label class="mr-3 mt-2" for="field-1"><h5>Order Instructions<span class="ctm-required">*</span></h5></label>
                    <input type="text" id="field-1" name="order_instructions[]" value="{{ old('order_instructions.*') }}" class="form-control validation-single" aria-describedby="button-addon2">
                </div>
            </div>
        </div>
    @endforelse
</div>
