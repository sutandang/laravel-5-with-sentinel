<?php namespace Mbelinger\Http\Requests\Admin;



class CategoryRequest extends BaseRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'slug' => 'min:2',
        ];
    }

}
