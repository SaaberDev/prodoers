<div style="display: contents">
    <div class="col-md-5 mt-4">
        <div class="form-group" wire:ignore>
            <label>Apply coupon to</label>

            <select wire:model="applyTo" class="js-states select2 form-control {{--{{ $errors->has('apply_to') ? ' is-invalid' : '' }}--}}"
                    data-placeholder="apply_to"
                    id="apply_to"
                    name="apply_to" style="width: 100%;"
            >
                <option value="all" selected>All</option>
                <option value="categories">Categories</option>
                <option value="services">Services</option>
            </select>
            @if($errors->has('categories'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('categories') }}</strong>
                </span>
            @endif
        </div>
    </div>


{{--    @if($service_categories == true)--}}
        <div class="col-md-5 mt-4 {{--{{ $service_categories == true ? 'd-block' : 'd-none' }}--}}">
            <div class="form-group">
                <label>Apply coupon to {{ $applyTo }} {{--Categories--}}</label>
{{--                @if($service_categories === true)--}}
                <select class="js-states select2 form-control {{--{{ $errors->has('categories') ? ' is-invalid' : '' }}--}}"
                        data-placeholder="categories"
                        id="categories"
                        style="width: 100%;"
                        multiple
                >
                    @if($service_categories == true)
                        @foreach($service_categories as $service_category)
                            <option wire:ignore value="{{ $service_category->id }}" {{ $service_category->id == old('categories') ? 'selected' : '' }}>{{ $service_category->title }}</option>
                        @endforeach
                    @elseif($services == true)
                        @foreach($services as $service)
                            <option wire:ignore value="{{ $service->id }}" {{ $service->id == old('services') ? 'selected' : '' }}>{{ $service->title }}</option>
                        @endforeach
                    @endif
                </select>

                @if($errors->has('categories'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('categories') }}</strong>
                    </span>
                @endif
            </div>
        </div>
{{--    @endif--}}


    {{-- Internal Scripts --}}
    <script>
        document.addEventListener("livewire:load", () => {
            const el = $("#apply_to");
            iniSelect();

            el.on('change', function (e) {
                @this.set('applyTo', el.select2("val"))
            });

            function iniSelect(){
                el.select2({
                    placeholder: "Choose where to apply"
                });
            }
        });

        document.addEventListener("livewire:load", () => {
            const el = $("#categories");
            iniSelect()

            Livewire.hook('message.processed', (message, component) => {
                iniSelect()
            })
            Livewire.on('setCategoriesSelect', values => {
                el.val(values).trigger('change.select2')
            })

            // el.on('change', function (e) {
            //     @this.set('dropdown', el.select2("val"))
            // })

            Livewire.hook('element.updated', (message, component) => {
                el.on('change', function (e) {
                    @this.set('dropdown', el.select2("val"))
                })
            })

            function iniSelect(){
                el.select2({
                    placeholder: "Choose where to apply",
                    allowClear: !el.attr('required'),
                });
            }
        })

        // document.addEventListener("livewire:load", () => {
        //     const el = $("#allServices");
        //     iniSelect();
        //
        //     Livewire.hook('message.processed', (message, component) => {
        //         iniSelect()
        //     })
        //     Livewire.on('setCategoriesSelect', values => {
        //         el.val(values).trigger('change.select2')
        //     })
        //
        //     el.on('change', function (e) {
        //         @this.set('dropdown', el.select2("val"))
        //     });
        //
        //     function iniSelect(){
        //         el.select2({
        //             placeholder: "Choose where to apply",
        //             allowClear: !el.attr('required'),
        //         });
        //     }
        // });

        // $("#apply_to").select2({
        //     placeholder: "Choose Categories"
        //     , allowClear: true
        // });
        //
        // $("#categories").select2({
        //     placeholder: "Choose Categories"
        //     , allowClear: true
        // });
        //
        // $("#allServices").select2({
        //     placeholder: "Choose Services"
        //     , allowClear: true
        // });
        //
        // $("#coupon_type").select2({
        //     placeholder: "Choose a coupon type",
        // });
        //
        // flatpickr("#start_date", {
        //     enableTime: true,
        //     enableSeconds: true,
        //     dateFormat: "d-m-Y G:i:S K",
        //     weekNumbers: true,
        //     parseDate: true
        // });
        // flatpickr("#end_date", {
        //     enableTime: true,
        //     enableSeconds: true,
        //     dateFormat: "d-m-Y G:i:S K",
        //     weekNumbers: true,
        //     parseDate: true
        // });
    </script>
</div>


{{--@if(is_null($applyTo))--}}
{{--    @push('styles')--}}
{{--        <link href="{{ mix('_assets/_admin_panel/css/dashboard.css') }}" rel="stylesheet">--}}
{{--        <link href="{{ mix('_assets/_custom/css/custom_styles.css') }}" rel="stylesheet">--}}
{{--    @endpush--}}

{{--    @push('scripts')--}}
{{--        <script src="{{ mix('_assets/_admin_panel/js/dashboard.js') }}"></script>--}}
{{--        <script src="{{ mix('_assets/_custom/js/custom_scripts.js') }}"></script>--}}
{{--    @endpush--}}
{{--@endif--}}

