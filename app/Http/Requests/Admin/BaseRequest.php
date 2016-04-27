<?php namespace Mbelinger\Http\Requests\Admin;

use Mbelinger\Http\Requests\Request;

class BaseRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }
}
