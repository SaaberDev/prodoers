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
        return [
            'service_category_title' => 'required',
            'category_popular' => 'nullable',
            'category_status' => 'nullable',
            'meta_description' => 'required',
            'banner_image' => 'required|image|mimes:jpg,bmp,png',
            'thumbnail_image' => 'required|image|mimes:jpg,bmp,png',
            'service_description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'banner_image.image' => 'The file type of category banner must be a file of jpg,bmp,png',
            'thumbnail_image.image' => 'The file type of category banner must be a file of jpg,bmp,png',
        ];
    }
}
