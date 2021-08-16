<?php

namespace App\Http\Requests\Admin\Service;

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
                    'meta_description' => 'required',
                    'short_desc' => 'required',
                    'allCategories' => 'required',
                    'service_price' => 'required'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'service_title' => 'required',
                    'service_tags' => 'required',
                    'meta_description' => 'required',
                    'short_desc' => 'required',
                    'allCategories' => 'required',
                    'service_price' => 'required',
                ];
            default: break;
        }
    }

    public function messages()
    {
        return [
            'service_title.required' => 'Title field is required',
            'service_tags.required' => 'ServiceTag field is required',
            'meta_description.required' => 'Meta Description field is required',
            'short_desc.required' => 'Short Description field is required',
            'allCategories.required' => 'Categories field is required',
            'service_price.required' => 'Price field is required',
        ];
    }
}
