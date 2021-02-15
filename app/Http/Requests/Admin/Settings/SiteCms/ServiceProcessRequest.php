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
        foreach (range(1, 6) as $key => $item) {
            return [
                'service_process_title_' . ($key + 1) => 'required',
                'service_process_image_' . ($key + 1) => 'nullable|image|mimes:svg',
            ];
        }
    }

    public function messages()
    {
        foreach (range(1, 6) as $key => $item) {
            return [
                'service_process_title_' . ($key + 1) . '.required' => 'Title field is required',
                'service_process_image_' . ($key + 1) . '.image' => 'File must be an image',
                'service_process_image_' . ($key + 1) . '.mimes' => 'Only SVG format is supported',
            ];
        }
    }
}
