<?php

namespace App\Http\Requests\Admin\Footer;

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
            'copyright' => 'required',
            'footer_desc' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'footer_logo.image' => 'File must be an image',
            'footer_logo.mimes' => 'File format not supported. Supported format is SVG Only',
            'copyright.required' => 'Copyright field is required',
            'footer_desc.required' => 'Footer description field is required',
        ];
    }
}
