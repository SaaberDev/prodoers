<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
                    'service_category_title' => 'required',
                    'category_popular' => 'nullable',
                    'category_status' => 'nullable',
                    'meta_description' => 'required',
                    'banner_image' => 'required|image|mimes:jpg,bmp,png',
                    'thumbnail_image' => 'required|image|mimes:jpg,bmp,png',
                    'service_description' => 'required',
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'service_category_title' => 'required',
                    'category_popular' => 'nullable',
                    'category_status' => 'nullable',
                    'meta_description' => 'required',
                    'banner_image' => 'nullable|image|mimes:jpg,bmp,png',
                    'thumbnail_image' => 'nullable|image|mimes:jpg,bmp,png',
                    'service_description' => 'required',
                ];
            default: break;
        }
    }

    public function messages(): array
    {
        return [
            'banner_image.image' => 'The file type of category banner must be a file of jpg,bmp,png',
            'thumbnail_image.image' => 'The file type of category banner must be a file of jpg,bmp,png',
        ];
    }
}
