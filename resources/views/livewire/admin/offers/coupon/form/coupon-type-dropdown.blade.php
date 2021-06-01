<div style="display: contents">
    <div class="col-md-3 mt-4">
        <div class="form-group mb-0" wire:ignore>
            <label for="">
                <h5>Type</h5></label>
            <select class="js-states select2 form-control {{ $errors->has('coupon_type') ? ' is-invalid' : '' }}"
                    wire:model="couponType"
                    data-placeholder="coupon_type"
                    id="coupon_type"
                    name="coupon_type" style="width: 100%;"
            >
                <option></option>
                <option value="fixed">Fixed</option>
                <option value="percent_off">Percentage</option>
            </select>
            @if($errors->has('coupon_type'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('coupon_type') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-3 mt-4">
        <div class="form-group mb-0">
            <label for="">
                <h5>discount <span><small>{{ $couponType == 'fixed' ? '(' . 'by' . ' ' . 'amount' . ')' : '' }}{{ $couponType == 'percent_off' ? '(' . 'by' . ' ' . 'percentage' . ')' : '' }}</small></span></h5></label>
            <div class="input-group">
                <input class="form-control {{ $errors->has('fixed') || $errors->has('percent_off') ? ' is-invalid' : '' }}"
                       name="{{ $couponType == 'fixed' ? 'fixed' : '' }}{{ $couponType == 'percent_off' ? 'percent_off' : '' }}"
                       type="text"
                       wire:model="discountData"
                >
                @if($errors->has('fixed'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('fixed') }}</strong>
                    </span>
                @elseif($errors->has('percent_off'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('percent_off') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("livewire:load", () => {
            const el = $("#coupon_type");
            iniSelect();

            el.on('change', function (e) {
            @this.set('couponType', el.select2("val"))
            });

            function iniSelect(){
                el.select2({
                    placeholder: "Choose where to apply"
                });
            }
        });
    </script>
</div>
