<?php

namespace App\Http\Requests;

use App\Models\JobCategory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateJobCategoryRequest extends FormRequest
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
        $rules = JobCategory::$rules;
        $rules['name'] = 'required|max:160|unique:job_categories,name,'.$this->route('jobCategory')->id;
        $rules['customer_image'] = 'nullable|mimes:jpeg,jpg,png';

        return $rules;
    }

    /**
     * @return array
     */
    public function messages()
    {
        $messages['customer_image.mimes'] = 'The category image must be a file of type: jpeg, jpg, png.';

        return $messages;
    }
}
