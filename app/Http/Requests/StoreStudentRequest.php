<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreStudentRequest extends Request
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
            'email' => 'required|email|max:255|unique:users,email,'.$this->request->get('id'),
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'idn' => 'required|max:10|unique:users,idn,'.$this->request->get('id'),
            'birthdate' => 'date_format:Y-m-d',
            'mobile' => 'required|max:10',
            'phone' => 'required|max:9',
            'address' => 'required|max:255',
            'partial1' => 'numeric',
            'partial2' => 'numeric',
            'partial3' => 'numeric'

        ];
    }
}
