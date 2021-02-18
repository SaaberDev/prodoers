<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class BannerSectionRequest extends FormRequest
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
            'headline.*' => '',
            'tagline.*' => '',
            'banner.*' => 'nullable|image|mimes:svg',
        ];
    }

    public function messages()
    {
        return [
            'banner.*.image' => 'File must be an image',
            'banner.*.mimes' => 'Only SVG format is supported',
        ];
    }
}
