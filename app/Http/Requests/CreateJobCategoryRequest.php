<?php

namespace App\Http\Requests;

use App\Models\JobCategory;
use Illuminate\Foundation\Http\FormRequest;

class CreateJobCategoryRequest extends FormRequest
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
        return JobCategory::$rules;
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return  [
            'customer_image.mimes' => 'The category image must be a file of type: jpeg, jpg, png.',
        ];
    }
}
