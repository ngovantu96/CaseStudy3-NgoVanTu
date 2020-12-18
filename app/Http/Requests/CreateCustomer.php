<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomer extends FormRequest
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
            'name'=>'required|min:2|max:30',
            'email'=> 'required|email|unique:customers,email,',
            'phone'=> 'required|min:10',
            'address'=> 'required|min:4|max:200',
        ];
    }
    public function messages()
    {
        $message = [
            'name.required' =>'tên không được để trống',
            'name.min'  => 'tên có độ dài ngắn nhất 2 kí tự',
            'name.max' =>'tên có dội dài nhiều nhất 30 kí tự',
            'email.required'=>'email không dược để trống',
            'email.unique'=>'email này đã tồn tại',
            'phone.required'=>'số điện thoại không được để trống',
            'phone.min'=>'số điện thoại của bạn không hợp lệ',
            'address.required'=> 'địa chỉ không được để trống',
            'address.min'=>'địa chỉ có độ dài ít nhất 4 kí tự',
            'address.max'=>'địa chỉ có độ dài tối đa 200 kí tự',
        ];
        return $message;
    }
}
