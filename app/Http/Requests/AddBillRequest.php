<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:11|min:9|numeric',
            'birthday' => 'required',
            'product' => 'required',
            'quantity' => 'required|numeric',
            'date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Fullname is required!',
            'password.required' => 'Password is required!',
            'password.min' => 'Password is too short',
        ];
    }
}
