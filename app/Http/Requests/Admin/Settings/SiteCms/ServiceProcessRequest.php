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

            /*'service_process_title_1' => 'required',
            'service_process_image_1' => 'nullable|image|mimes:svg',

            'service_process_title_2' => 'required',
            'service_process_image_2' => 'nullable|image|mimes:svg',

            'service_process_title_3' => 'required',
            'service_process_image_3' => 'nullable|image|mimes:svg',

            'service_process_title_4' => 'required',
            'service_process_image_4' => 'nullable|image|mimes:svg',

            'service_process_title_5' => 'required',
            'service_process_image_5' => 'nullable|image|mimes:svg',*/
        ];
    }

    public function messages(){
        return [
            'service_process_title_.*.required' => 'Title field is required',
            'service_process_image_.*.image' => 'File must be an image',
            'service_process_image_.*.mimes' => 'Only SVG format is supported',

            /*'service_process_title_1.required' => 'Title field is required',
            'service_process_image_1.image' => 'File must be an image',
            'service_process_image_1.mimes' => 'Only SVG format is supported',

            'service_process_title_2.required' => 'Title field is required',
            'service_process_image_2.image' => 'File must be an image',
            'service_process_image_2.mimes' => 'Only SVG format is supported',

            'service_process_title_3.required' => 'Title field is required',
            'service_process_image_3.image' => 'File must be an image',
            'service_process_image_3.mimes' => 'Only SVG format is supported',

            'service_process_title_4.required' => 'Title field is required',
            'service_process_image_4.image' => 'File must be an image',
            'service_process_image_4.mimes' => 'Only SVG format is supported',

            'service_process_title_5.required' => 'Title field is required',
            'service_process_image_5.image' => 'File must be an image',
            'service_process_image_5.mimes' => 'Only SVG format is supported',*/
        ];
    }
}
