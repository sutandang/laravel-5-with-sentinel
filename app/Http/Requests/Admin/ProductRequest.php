<?php namespace Mbelinger\Http\Requests\Admin;



class ProductRequest extends BaseRequest {

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
            'name' => 'required|min:2',
            'meta' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
    }

}
