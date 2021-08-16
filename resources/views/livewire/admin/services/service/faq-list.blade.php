<div>
    @forelse($service->serviceFaqs as $key => $faq)

{{--        <h5>FAQ #{{ $loop->iteration }}</h5>--}}

        <div id="dynamic-field-faq-{{ $key + 1 }}" class="row dynamic-field-faq" wire:key="{{ $loop->index }}">
            <label class="mr-3 mt-2" for="field-1">FAQ #{{ $loop->iteration }}<span class="ctm-required">*</span></label>

            <div class="col-md-12">
                <div  class="input-group  mb-0">
                    <input type="text" id="faqs-question-{{ $key + 1 }}" value="{{ $faq->question }}" class="form-control validation-faqs" name="question[]" placeholder="">
                    <div class="input-group-append">
                        <a type="button"
                           id="sweet_delete"
                           href="{{ route('super_admin.service.self.destroyServiceFaq', $faq->id) }}"
                           class="btn sweet_delete p-0 m-0"
                        >
                            <svg style="width: 16px; height: auto; margin: 8px 5px 0 15px;" xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027" viewBox="0 0 11.91 16.027"><path d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z" transform="translate(-7 -3)" fill="none" stroke="#000" stroke-width="1"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="form-group">
                    <textarea type="text" id="faqs-answer-{{ $key + 1 }}" class="form-control validation-faqs" name="answer[]" rows="5">{{ $faq->answer }}</textarea>
                </div>
            </div>
        </div>
    @empty
        <div id="dynamic-field-faq-1" class="row dynamic-field-faq">
            <label class="mr-3 mt-2" for="field-1">FAQ #1</label>
            <div class="col-md-12">
                <div  class="form-group mb-0">
                    <input type="text" id="faqs-question-1" class="form-control validation-faqs" name="question[]" placeholder="">
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="form-group">
                    <textarea type="text" id="faqs-answer-1" class="form-control validation-faqs" name="answer[]" rows="5"></textarea>
                </div>
            </div>
        </div>
    @endforelse
</div>
