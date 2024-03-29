<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
        switch ($this->method()){
            case 'GET':
            case 'PUT':
            case 'DELETE':
                return [];
            case 'PATCH':
                return [
                    'edit_tags' => 'required'
                ];
            case 'POST':
                return [
                    'tags' => 'required'
                ];
            default: break;
        }
    }

    public function messages()
    {
        return [
            'tags.required' => 'Tags field is required',
            'edit_tags.required' => 'Tags field is required'
        ];
    }
}
