<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => trans('Required'),
            'email.required'   => trans('Required'),
            'email.email'      => trans('Invalid email format'),
            'subject.required' => trans('Required'),
            'message.required' => trans('Required'),
        ];
    }

    public function validationData()
    {
        return $this->all();
    }
}
