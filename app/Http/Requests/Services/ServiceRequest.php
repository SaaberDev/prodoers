<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_title' => 'required',
            'meta_description' => 'required',
            'published_status' => 'nullable',
            'allCategories' => 'required',
            'service_price' => 'required',
            'service_image' => 'required|image|mimes:jpg,bmp,png',
            'service_thumbnail' => 'required|image|mimes:jpg,bmp,png',
            'service_features.1' => 'required',
            'service_description' => 'required',
            'service_faq.1' => 'required',
        ];
    }

    public function messages()
    {
        //
    }
}
