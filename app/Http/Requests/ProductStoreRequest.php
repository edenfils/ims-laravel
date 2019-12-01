<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'sku'           => 'required|string|max:60',
            'price'         => 'required|numeric',
            'img_url'       => 'required|url',
            'material'      => 'required|string|max:60',
            'description'   => 'required|string|min:10',
            'brand_id'      => 'required|numeric',
            'qty'           => 'required|numeric',
            'size'          => 'required|numeric',
            /*'user_id'       => 'required|numeric',*/
        ];
    }

    public function messages() 
    {

        return [
            'title.required'    => 'The product :attribute is required.',
            'title.alpha_num'   => 'The product :attribute must contain alpha-numeric characters.',
            'title.max'         => 'The product :attribute cannot exceed 200 characters',

            'sku.required'      => 'The product :attribute is required.',
            'sku.alpha_num'     => 'The product :attribute must contain  alpha-numeric characters.',
            'sku.max'           => 'The product :attribute cannot exceed 60 characters',

            'price.required'    => 'The product :attribute is required.',
            'price.numeric'     => 'The product :attribute must be a number',

            'img_url.required'  => 'The product :attribute is required.',
            'img_url.url'       => 'The product :attribute must be valid',


            'material.required'     => 'The product :attribute is required.',
            'material.string'       => 'The product :attribute must be a text',
            'material.max'          => 'The product :attribute cannot exceed 60 characters',

            'description.required'     => 'The product :attribute is required.',
            'description.string'       => 'The product :attribute must be a text',
            'description.min'          => 'The product :attribute must have at least 10 characters.',

            'brand_id.required'     => 'The product :attribute is required.',
            'brand_id.numeric'       => 'Please select a valid brand',

            'qty.required'     => 'The product :attribute is required.',
            'qty.numeric'       => 'The product :attribute must be a number',

            'size.required'     => 'The product :attribute is required.',
            'size.numeric'       => 'The product :attribute must be a number',

            /*'user_id.required'     => 'The :attribute is required.',
            'user_id.numeric'       => 'Please select a valid user',*/

        ];
    }

    public function attributes()
    {
        return [
            'title' => 'title',
            'sku' => 'SKU',
            'price' => 'price',
            'img_url' => 'image URL',
            'material' => 'material',
            'description' => 'description',
            'brand_id' => 'brand name',
            'qty' => 'quantity',
            'size' => 'size',
            'user_id' => 'user'
        ];
    }
}
