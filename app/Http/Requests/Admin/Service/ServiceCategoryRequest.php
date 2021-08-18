<?php

namespace App\Http\Requests\Admin\Service;

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
            case 'PUT':
            case 'PATCH':
            case 'POST':
                return [
                    'service_category_title' => 'required',
                    'navbar_status' => '',
                    'category_popular' => '',
                    'category_status' => '',
                    'meta_desc' => 'required',
                    'short_desc' => 'required',
                    'order_instruction_desc' => 'required',
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
