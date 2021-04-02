<?php

namespace App\Http\Requests\Admin\Offer;

use Illuminate\Foundation\Http\FormRequest;

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
//            'categories' => 'required',
//            'services' => 'required',
//            'published_status' => 'nullable',
//            'title' => 'required',
//            'coupon_code' => 'required',
//            'start_date' => 'required',
//            'end_date' => 'required',
//            'coupon_type' => 'required',
//            'percent_off' => 'nullable',
//            'amount' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
//            'categories.required' => 'required',
//            'services.required' => 'required',
//            'published_status.required' => 'required',
            'title.required' => 'required',
            'code.required' => 'required',
            'start_date.required' => 'required',
            'end_date.required' => 'required',
            'coupon_type.required' => 'required',
            'percentage.required' => 'required',
            'fixed.required' => 'required',
        ];
    }

    public function isValidated()
    {
        return $this->validate($this->rules(), $this->messages());
    }
}
