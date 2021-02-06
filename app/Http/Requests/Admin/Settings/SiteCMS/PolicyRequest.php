<?php

namespace App\Http\Requests\Admin\Settings\SiteCMS;

use Illuminate\Foundation\Http\FormRequest;

class PolicyRequest extends FormRequest
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
        switch ($this->method()){
            case 'GET':
            case 'POST':
            case 'DELETE':
                return [];
            case 'PUT':
            case 'PATCH':
                return [
                    'privacy_policy' => 'required',
                    'cookie_policy' => 'required',
                    'payment_policy' => 'required',
                    'terms_and_condition' => 'required',
                ];
            default: break;
        }
    }

    public function messages()
    {
        return [
            'privacy_policy.required' => 'Privacy Policy field is required',
            'cookie_policy.required' => 'Cookie Policy field is required',
            'payment_policy.required' => 'Payment Policy field is required',
            'terms_and_condition.required' => 'Terms and Condition field is required',
        ];
    }
}
