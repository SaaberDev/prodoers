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
        switch ($this->method()){
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'social_icon' => 'required|image|mimes:svg',
                    'social_title' => 'required',
                    'social_url' => ['required', 'regex:/www\.|https?:\/\/(?:www\.|(?!www))/'],
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'footer_logo' => 'nullable|image|mimes:svg',
                    'footer_payment_method' => 'nullable|image|mimes:svg',
                    'footer_copyright' => 'required',
                    'footer_desc' => 'required',

                    'social_icon' => 'nullable|image|mimes:svg',
                    'social_title' => 'required',
                    'social_url' => ['required', 'regex:/www\.|https?:\/\/(?:www\.|(?!www))/'],
                ];
            default: break;
        }
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

            'social_icon.required' => 'Icon field is required',
            'social_icon.image' => 'File must be an image',
            'social_icon.mimes' => 'Only SVG format is supported',
            'social_title.required' => 'Title field is required',
            'social_url.required' => 'Url field is required',
            'social_url.regex' => 'Invalid Url, Url must start with http:// or https://',
        ];
    }
}
