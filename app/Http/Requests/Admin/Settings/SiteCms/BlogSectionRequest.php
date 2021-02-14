<?php

namespace App\Http\Requests\Admin\Settings\SiteCms;

use Illuminate\Foundation\Http\FormRequest;

class BlogSectionRequest extends FormRequest
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
            'blog_headline' => 'required',
            'blog_tagline' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'blog_headline.required' => 'Headline field is required',
            'blog_tagline.required' => 'Tagline field is required',
        ];
    }
}
