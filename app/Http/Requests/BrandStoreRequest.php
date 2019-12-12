<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends BaseFormRequest
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
            'title'         => 'required|string|max:200',
            'img_url'       => 'required|url',
            'description'   => 'required|string|min:2',
            /*'user_id'       => 'required|numeric',*/
        ];
    }


    public function messages() {
        return [

            'title.required'    => 'The brand :attribute is required.',
            'title.alpha_num'   => 'The brand :attribute must contain alpha-numeric characters.',
            'title.max'         => 'The brand :attribute cannot exceed 200 characters',

            'img_url.required'  => 'The brand :attribute is required.',
            'img_url.url'       => 'The brand :attribute must be valid',

            'description.required'     => 'The brand :attribute is required.',
            'description.string'       => 'The brand :attribute must be a text',
            'description.min'          => 'The brand :attribute must have at least 2 characters.',

            /*'user_id.required'     => 'The :attribute is required.',
            'user_id.numeric'       => 'Please select a valid user',*/
        ];
    }


    public function attributes()
    {
        return [
            'title' => 'title',
            'img_url' => 'image URL',
            'description' => 'description'
        ];
    }


    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            'title'         => 'trim|strip_tags|escape',
            'img_url'       => 'trim|strip_tags|escape',
            'description'   => 'strip_tags|escape',
            /*'user_id'       => 'strip_tags|digit|escape',*/
        ];
    }
}
