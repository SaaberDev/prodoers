<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class BrandIdentityRequest extends FormRequest
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
            'headline' => 'required',
            'tagline' => 'required',
            'banner' => 'nullable|image|mimes:svg',
            'logo' => 'nullable|image|mimes:svg',
            'favicon' => 'nullable|image|mimes:svg',
        ];
    }

    public function messages()
    {
        return [
            'headline.required' => 'Brand headline is required',
            'tagline.required' => 'Brand tagline is required',
            'banner.image' => 'File must be an image',
            'banner.mimes' => 'Only SVG format is supported',
            'logo.image' => 'File must be an image',
            'logo.mimes' => 'Only SVG format is supported',
            'favicon.image' => 'File must be an image',
            'favicon.mimes' => 'Only SVG format is supported',
        ];
    }
}
