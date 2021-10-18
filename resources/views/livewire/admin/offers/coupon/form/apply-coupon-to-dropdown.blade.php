<div style="display: contents">
    <div class="form-group">
        <label>Apply coupon to</label>
        <div wire:ignore>
            <select wire:model="applyTo"
                    name="apply_to"
                    id="apply_to"
                    class="js-states select2 {{ $errors->has('apply_to') ? ' is-invalid' : '' }}"
                    style="width: 100%"
            >
                <option></option>
                <option value="all">All</option>
                <option value="services">Services</option>
                <option value="categories">Categories</option>
            </select>

            @if($errors->has('apply_to'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('apply_to') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">

        <select class="js-states select2 {{ $errors->has('services') || $errors->has('categories') ? ' is-invalid' : '' }}"
                wire:model="selected"
                id="dropdown"
                name="{{ $applyTo == 'categories' ? 'categories[]' : '' }}{{ $applyTo == 'services' ? 'services[]' : '' }}{{ $applyTo == 'all' ? 'all[]' : '' }}"
                style="width: 100%;"
                multiple
        >
            @foreach($dropdown['service_categories'] as $service_category)
                <option wire:ignore wire:key="{{ $service_category->id }}" value="{{ $service_category->id }}">{{ $service_category->title }}</option>
            @endforeach

            @foreach($dropdown['services'] as $service)
                <option wire:ignore wire:key="{{ $service->id }}" value="{{ $service->id }}">{{ $service->title }}</option>
            @endforeach
        </select>

        @if($errors->has('services'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('services') }}</strong>
        </span>
        @elseif($errors->has('categories'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('categories') }}</strong>
        </span>
        @endif
    </div>


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
                    placeholder: "Choose where to apply",
                    theme: 'bootstrap4'
                });
            }
        });

        document.addEventListener("livewire:load", () => {
            const el = $("#dropdown");
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

            function iniSelect(){
                el.select2({
                    placeholder: "Choose where to apply",
                    allowClear: !el.attr('required'),
                    theme: 'bootstrap4'
                });
            }
        })
    </script>
</div>

