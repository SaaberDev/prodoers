<?php

namespace App\Http\Requests\Admin\Settings\SiteCMS;

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
            'brand_headline' => 'required',
            'brand_tagline' => 'required',
            'home_page_banner' => 'nullable|image|mimes:svg',
            'brand_logo' => 'nullable|image|mimes:svg',
            'browser_favicon' => 'nullable|image|mimes:svg',
        ];
    }

    public function messages()
    {
        return [
            'brand_headline.required' => 'Brand headline is required',
            'brand_tagline.required' => 'Brand tagline is required',
            'home_page_banner.image' => 'File must be an image',
            'home_page_banner.mimes' => 'Only SVG format is supported',
            'brand_logo.image' => 'File must be an image',
            'brand_logo.mimes' => 'Only SVG format is supported',
            'browser_favicon.image' => 'File must be an image',
            'browser_favicon.mimes' => 'Only SVG format is supported',
        ];
    }
}
