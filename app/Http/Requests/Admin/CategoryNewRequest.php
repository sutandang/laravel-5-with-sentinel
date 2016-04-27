<?php namespace Mbelinger\Http\Requests\Admin;


class CategoryNewRequest extends BaseRequest {


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'unique:categories|required|min:2',
            'slug' => 'unique:categories|required|min:2',
        ];
    }

}
