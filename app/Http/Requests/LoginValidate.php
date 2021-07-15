<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginValidate extends FormRequest
{

    protected function failedValidation(Validator $validator)
    {
        // 此处自定义表单验证错误信息
        $data = [
            'success' => false,
            'msg' => $validator->errors()->first(),
        ];
        $respone = new Response(json_encode($data));
        throw (new ValidationException($validator, $respone))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
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
            'username' => 'required|max:32',
            'password' => 'required|min:6|max:18',
            'captcha' => 'required|captcha'
        ];
    }

    /**
 * 获取已定义验证规则的错误消息。
 *
 * @return array
 */
public function messages()
{
    return [
        'username.required' => '请输入用户名',
        'password.required'  => '请输入密码',
        'captcha.required'  => '请输入验证码',
        'captcha.captcha'  => '请输入正确的验证码'
    ];
}

}
