<?php

namespace App\Http\Requests\Admin\Offer;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $today = Carbon::today();
        return [
            'categories' => [
                Rule::requiredIf($this->input('apply_to') == 'categories')
            ],
            'services' => [
                Rule::requiredIf($this->input('apply_to') == 'services')
            ],
            'apply_to' => 'required',
            'published_status' => 'nullable',
            'title' => 'required',
            'coupon_code' => 'required',
            'start_date' => "required|after:$today",
            'end_date' => 'required|after:start_date',

            'fixed' => [
                Rule::requiredIf($this->input('coupon_type') == 'fixed')
            ],
            'percent_off' => [
                Rule::requiredIf($this->input('coupon_type') == 'percent_off')
            ],
            'coupon_type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'categories.required' => 'Choose a category for this coupon.',
            'services.required' => 'Choose a service for this coupon.',
            'apply_to.required' => 'You must choose an option where to apply this coupon.',
            'title.required' => 'Coupon name is required.',
            'coupon_code.required' => 'Coupon code is required',
            'start_date.required' => 'Please choose a Start Date for the coupon',
            'start_date.after_or_equal' => 'You cannot create a past event',
            'end_date.required' => 'Please choose an End Date for the coupon',
            'end_date.after' => 'You cannot create an event for the same or before the starting date',
            'coupon_type.required' => 'required',
            'percentage.required' => 'required',
            'fixed.required' => 'required',
        ];
    }
}
