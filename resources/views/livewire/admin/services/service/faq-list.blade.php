<div>
    @forelse($service->serviceFaqs as $key => $faq)
        <div id="dynamic-field-multiple-{{ $key + 1 }}" class="row dynamic-field-multiple" wire:key="{{ $loop->index }}">
            <div class="col-md-12 mt-3">
                <label for="field-1-{{ $loop->iteration }}">FAQ's<span class="ctm-required">*</span></label>
                <div class="input-group-append">
                    <input type="text" id="field-1-{{ $loop->iteration }}" value="{{ $faq->question }}" class="form-control validation-multiple" name="question[]" placeholder="">
                    <a type="button"
                       id="sweet_delete"
                       href="{{ route('super_admin.service.self.destroyServiceFaq', $faq->id) }}"
                       class="btn sweet_delete p-0 m-0"
                    >
                        <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                    </a>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <textarea type="text" id="field-2-{{ $loop->iteration }}" class="form-control validation-multiple" name="answer[]" rows="5">{{ $faq->answer }}</textarea>
            </div>
        </div>
    @empty
        <div id="dynamic-field-multiple-1" class="row dynamic-field-multiple">
            <div class="col-md-12">
                <div  class="form-group mb-0">
                    <label for="field-1-1">FAQ's<span class="ctm-required">*</span></label>
                    <input type="text" id="field-1-1" class="form-control validation-multiple" name="question[]" placeholder="">
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="form-group">
                    <textarea type="text" id="field-2-1" class="form-control validation-multiple" name="answer[]" rows="5"></textarea>
                </div>
            </div>
        </div>
    @endforelse
</div>
