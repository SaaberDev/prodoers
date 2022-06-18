<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class HowDesignwalaWorksRequest extends FormRequest
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
            'designwala_title_.*' => 'required',
            'designwala_desc_.*' => 'required',
            'designwala_image_.*' => 'nullable|image|mimes:svg',
            'designwala_video' => 'nullable|mimes:mp4',
            'designwala_video_thumbnail' => 'nullable|mimes:svg'
        ];
    }

    public function messages()
    {
        return [
            'designwala_title_.*.required' => 'Title field is required',
            'designwala_desc_.*.required' => 'Title field is required',
            'designwala_image_.*.image' => 'File must be an image',
            'designwala_image_.*.mimes' => 'Only SVG format is supported',
            'designwala_video.mimes' => 'Only MP4 format is supported',
            'designwala_video_thumbnail.mimes' => 'Only SVG format is supported',
        ];
    }
}
