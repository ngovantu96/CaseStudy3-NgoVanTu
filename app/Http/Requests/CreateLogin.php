<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLogin extends FormRequest
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
            'email'=>'required|',
            'password'=>'required|min:4|max:30',
        ];
    }
    public function messages()
    {
        $message = [
                'email.required' => 'email không được để trống',
                'email.regex' => 'email không đúng định dạng',
                'password.required'=> 'mật khẩu khồn được để trống',
                'password.min' => 'mật khẩu có ít nhất 4 kị tự'

        ];
        return $message;
    }
}
