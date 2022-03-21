<?php

namespace App\Http\Requests\Guest\Coupon;

use App\Rules\Coupon\isValid;
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
            'coupon_code' => ['required', new isValid()],
        ];
    }

    public function messages()
    {
        return [
            'coupon_code.required' => 'No coupon to apply'
        ];
    }
}
