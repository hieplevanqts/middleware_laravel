<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username'=>'required|email|min5',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'Tài khoản không được trỗng',
            'username.email'=>'Tài khoản phải là email',
            'username.min'=>'Tài khoản không được nhỏ hơn 5 ký tự',
            'password'=>'Mật khẩu không được để trống'
        ];
    }
}
