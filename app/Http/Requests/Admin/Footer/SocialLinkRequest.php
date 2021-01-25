<?php

namespace App\Http\Requests\Admin\Footer;

use Illuminate\Foundation\Http\FormRequest;

class SocialLinkRequest extends FormRequest
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
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'social_icon' => 'required|image|mimes:svg',
                    'social_title' => 'required',
                    'social_url' => ['required', 'regex:/www\.|https?:\/\/(?:www\.|(?!www))/'],
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'social_icon' => 'nullable|image|mimes:svg',
                    'social_title' => 'required',
                    'social_url' => ['required', 'regex:/www\.|https?:\/\/(?:www\.|(?!www))/'],
                ];
            default: break;
        }
    }

    public function messages()
    {
        return [
            'social_icon.required' => 'Social icon field is required',
            'social_icon.image' => 'File must be an image',
            'social_icon.mimes' => 'Only SVG format is supported',
            'social_title.required' => 'Social title field is required',
            'social_url.required' => 'Social url field is required',
            'social_url.regex' => 'Invalid Url, Url must start with http:// or https://',
        ];
    }
}
