<div>
    @forelse($service->serviceFeatures as $key => $serviceFeatures)
        <div id="dynamic-field-{{ $key + 1 }}" class="input-group dynamic-field mb-3" wire:key="{{ $loop->index }}">
            <label class="mr-3 mt-2" for="field-1">Feature #{{ $loop->iteration }}</label>
            <input type="text" id="field-{{ $key + 1 }}" value="{{ $serviceFeatures->feature_desc }}" class="form-control validation" name="features[]" aria-describedby="button-addon2">
            <div class="input-group-append">
                <a type="button" href="{{ route('super_admin.service.self.destroyServiceFeature', $serviceFeatures->id) }}" class="btn sweet_delete p-0 m-0">
                    <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                </a>
            </div>
        </div>
    @empty
        <div id="dynamic-field-1" class="input-group dynamic-field mb-3">
            <label class="mr-3 mt-2" for="field-1">Feature #1</label>
            <input type="text" id="field-1" name="features[]" value="{{ old('features.*') }}" class="form-control validation" aria-describedby="button-addon2">
        </div>
    @endforelse
</div>
