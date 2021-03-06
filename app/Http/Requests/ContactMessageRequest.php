<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:3',
            'message' => 'required|string|min:5',
            'captcha' => 'required|captcha'
        ];
        if($this->request->has('email') && !empty($this->request->get('email'))) $rules['email'] = 'email';
        return $rules;
    }
}
