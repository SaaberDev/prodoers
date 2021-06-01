<?php

namespace App\Http\Requests\Admin\Offer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
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
        return [
//            'categories' => [
//                Rule::requiredIf($this->input('apply_to') == 'categories')
//            ],
//            'services' => [
//                Rule::requiredIf($this->input('apply_to') == 'services')
//            ],
//            'apply_to' => 'required',
//            'published_status' => 'nullable',
            'title' => 'required',
//            'coupon_code' => 'required',
//            'start_date' => 'required',
//            'end_date' => 'required',

            'fixed' => [
                Rule::requiredIf($this->input('coupon_type') == 'fixed')
            ],
            'percent_off' => [
                Rule::requiredIf($this->input('coupon_type') == 'percent_off')
            ],
            'coupon_type' => 'required',
//            'percent_off' => 'nullable',
//            'amount' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
//            'categories.required' => 'required',
//            'services.required' => 'required',
//            'apply_to.required' => 'required',
//            'title.required' => 'required',
//            'coupon_code.required' => 'required',
//            'start_date.required' => 'required',
//            'end_date.required' => 'required',
//            'coupon_type.required' => 'required',
//            'percentage.required' => 'required',
//            'fixed.required' => 'required',
        ];
    }
}
