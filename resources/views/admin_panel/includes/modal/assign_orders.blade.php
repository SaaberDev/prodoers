@push('styles')
    <style>
        .adminPageDetailsSearch .input-group input {
            border: none;
            border-radius: 50px 50px;
            background: #E9EFE8;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 38px;
            height: 23px;
        }
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 13px;
            width: 13px;
            left: 30px;
            bottom: 1px;
            background-color: #ffffff;
            -webkit-transition: .4s;
            transition: .4s;
        }
        input:checked + .slider {
            background-color: #68D391;
        }
        input:focus + .slider {
            box-shadow: 0 0 1px #68D391;
        }
        input:checked + .slider:before {
            -webkit-transform: translateX(13px);
            -ms-transform: translateX(13px);
            transform: translateX(13px);
            left: 3px;
            background: #ffffff;
        }
        /* Rounded sliders */
        .slider.round {
            border-radius: 17px;
        }
        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endpush
<div class="modal fade shadow" id="assignorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Assign a Designwala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
            </div>
            <div class="modal-body">
                @livewire('admin.order.order-assign-table', [
                    'designwalas' => $designwalas,
                    'order' => $order
                ])
            </div>

        </div>
    </div>
</div>
