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
    public function rules(): array
    {
        switch ($this->method()){
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'service_title' => 'required',
                    'service_tags' => 'required',
                    'published_status' => 'nullable',
                    'meta_description' => 'required',
                    'allCategories' => 'required',
                    'service_price' => 'required',
                    'service_images.*' => 'required|image|mimes:jpg,svg,png',
                    'service_thumbnail' => 'required|image|mimes:jpg,svg,png',
                    'service_description' => 'required',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'service_title' => 'required',
                    'published_status' => 'nullable',
                    'meta_description' => 'required',
                    'allCategories' => 'required',
                    'service_price' => 'required',
                    'service_images.*' => 'nullable|image|mimes:jpg,svg,png',
                    'service_thumbnail' => 'nullable|image|mimes:jpg,svg,png',
                    'service_description' => 'required',
                ];
            default: break;
        }
    }

    public function messages()
    {
        return [
            'service_title.required' => 'Title field is required',
            'service_tags.required' => 'Tag field is required',
            'meta_description.required' => 'Meta Description field is required',
            'allCategories.required' => 'Categories field is required',
            'service_price.required' => 'Price field is required',

            'service_images.*.required' => 'Service image field is required',
            'service_images.*.image' => 'Service image must be jpg,svg,png',
            'service_thumbnail.required' => 'Service thumbnail field is required',
            'service_thumbnail.image' => 'Service thumbnail must be jpg,svg,png',
            'service_description.required' => 'Description field is required',
        ];
    }
}
