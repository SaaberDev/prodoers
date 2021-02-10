<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class ServiceProcessRequest extends FormRequest
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
            'service_process_title_.*' => 'required',
            'service_process_image_.*' => 'nullable|image|mimes:svg',
        ];
    }

    public function messages()
    {
        return [
            'service_process_title_.*.required' => 'Title field is required',
            'service_process_image_.*.image' => 'File must be an image',
            'service_process_image_.*.mimes' => 'Only SVG format is supported',
        ];
    }
}
