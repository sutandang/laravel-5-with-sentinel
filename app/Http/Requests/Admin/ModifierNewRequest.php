<?php namespace Mbelinger\Http\Requests\Admin;


class ModifierNewRequest extends BaseRequest {


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'unique:categories|required|min:2'
        ];
    }

}
