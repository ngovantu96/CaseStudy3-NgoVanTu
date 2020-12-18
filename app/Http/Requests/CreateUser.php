<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name'     => 'required|min:2|max:30',
            'email'    => 'required|email|unique:users,email,',
            'password' => 'required|min:4|max:30|',
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required'=> 'bạn không được để trống',
            'name.min'=> 'tên của bạn phải có ít nhất 2 kí tự',
            'name.max'=> 'tên của bạn có dộ dài nhiều nhất 30 kí tự',
            'email.required'=> 'email của bạn không được để trống',
            'email.unique' => 'email này đã tồn tại',
            'password.required' => 'mật khẩu không được để trống',
            'password.min' => 'mật khẩu có ít nhất 4 kí tự',
            'password.max' => 'mật khẩu có dộ dài nhiều nhất 30 kí tự',
            ];
        return $messages;
    }
}
