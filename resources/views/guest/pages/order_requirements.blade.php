@extends('guest.layouts.app')
@section('title', 'Order Requirements')

@push('styles')
    {{-- Internal Styles --}}
    <style>
        .text-area-wraper .problem {
            background-color: #f6f6f6;
            margin-top: 36px;
        }
        .dropzone {
            min-height: 100px;
            background-color: #f6f6f6;
            padding: 10px 12px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
@endpush

@section('content')
    @livewire('guest.order.order-component', ['service' => $service])
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        // orderRequirement js code

        const orderRequirementBtn = document.getElementById("requirementBtn")
        const orderSummeryBtn = document.getElementById("orderSummeryBtn")

        orderRequirementBtn.addEventListener("click", () => {
            const orderInnerBtn = document.getElementById("orderRequirement")
            orderInnerBtn.style.display = "none";
            document.getElementById("orderSummery").style.display = "block";
        })
        orderSummeryBtn.addEventListener("click", () => {
            const orderSummeryInnerBtn = document.getElementById("orderSummery")
            orderSummeryInnerBtn.style.display = "none";
            document.getElementById("orderRequirement").style.display = "block";
        })

    </script>
@endpush
