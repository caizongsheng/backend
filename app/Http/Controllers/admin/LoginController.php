<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginValidate;

class LoginController extends Controller
{
    public function login()
    {
        return view("admin.login.login");
    }

    public function dologin(LoginValidate $request)
    {
        $data = $request->validated();
        if((config('login.username') == $data['username']) && (md5($data['password']) == config('login.password'))){
            $request->session()->put('username', $data['username']);
            return response()->json(['success'=>true,'msg'=>'登录成功']);
        }
        return response()->json(['success'=>false,'msg'=>'登录失败']);
    }
}
