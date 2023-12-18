<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutusRequest extends FormRequest
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
            'about_title_one' => 'required',
            'about_title_two' => 'required',
            'about_title_three' => 'required',
            'about_description_one' => 'required',
            'about_description_two' => 'required',
            'about_description_three' => 'required',
            'about_image_one' => 'nullable|mimes:jpeg,jpg,png',
            'about_image_two' => 'nullable|mimes:jpeg,jpg,png',
            'about_image_three' => 'nullable|mimes:jpeg,jpg,png',
        ];
    }
}
