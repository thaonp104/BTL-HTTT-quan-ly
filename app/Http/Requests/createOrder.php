<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createOrder extends FormRequest
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
            'fullname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|digits_between:9,12|numeric',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Họ tên là trường bắt buộc, không được vượt quá 255 kí tự',
            'address.required' => 'Địa chỉ là trường bắt buộc, không được vượt quá 255 kí tự',
            'phone.required' => 'SĐT là trường bắt buộc, không vượt quá 11 kí tự, là 1 dãy số',
        ];
    }
}
