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
        return [
            'service_title' => 'required',
//            'published_status' => 'nullable',
//            'meta_description' => 'required',
//            'allCategories' => 'required',
//            'service_price' => 'required',
//            'service_description' => 'required',
//            'service_image' => 'required|image|mimes:jpg,bmp,png',
//            'service_thumbnail' => 'required|image|mimes:jpg,bmp,png',
//            'features.*'  => 'required',
            'faqs.question.*' => 'required',
            'faqs.answer.*' => 'required',
        ];
    }

//    public function messages()
//    {
//        //
//    }
}
