<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'footer_logo' => 'nullable|image|mimes:svg',
            'footer_payment_method' => 'nullable|image|mimes:svg',
            'footer_copyright' => 'required',
            'footer_desc' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'footer_logo.image' => 'File must be an image',
            'footer_logo.mimes' => 'Only SVG format is supported',
            'footer_payment_method.image' => 'File must be an image',
            'footer_payment_method.mimes' => 'Only SVG format is supported',
            'footer_copyright.required' => 'Copyright field is required',
            'footer_desc.required' => 'Footer description field is required',
        ];
    }
}
