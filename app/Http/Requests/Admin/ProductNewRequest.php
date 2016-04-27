<?php namespace Mbelinger\Http\Requests\Admin;


class ProductNewRequest extends BaseRequest {


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_category' => 'required',
            'product_modifier' => 'required',
            'name' => 'unique:categories|required|min:2',
            'meta' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'price' => 'required',
            'featured_image' => 'required'
        ];
    }

}
