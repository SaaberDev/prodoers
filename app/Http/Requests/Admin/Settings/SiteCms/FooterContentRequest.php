<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class FooterContentRequest extends FormRequest
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
            'logo' => 'nullable|image|mimes:svg',
            'payment_method' => 'nullable|image|mimes:svg',
            'desc' => '',
        ];
    }

    public function messages()
    {
        return [
            'logo.image' => 'File must be an image',
            'logo.mimes' => 'Only SVG format is supported',

            'payment_method.image' => 'File must be an image',
            'payment_method.mimes' => 'Only SVG format is supported',
        ];
    }
}
