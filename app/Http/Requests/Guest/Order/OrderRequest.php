<?php

namespace App\Http\Requests\Guest\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'requirements' => 'required',
            'order_requirement_files' => 'nullable',
            'payment_method' => 'required|in:paypal,visa,bkash,mastercard',
        ];
    }

    public function messages()
    {
        return [
            'requirements.required' => 'Requirements field is required.',
            'requirements.min' => 'Requirements length must be 250 character.',
            'payment_method.in' => 'Please choose a payment method.'
        ];
    }
}
