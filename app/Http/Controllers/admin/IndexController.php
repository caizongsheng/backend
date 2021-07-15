<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index.index');
    }

    public function main()
    {
        return view('admin.index.main');
    }

    /**
     * 个人资料
     */
    public function profile()
    {
        return view('admin.index.profile');
    }

    /**
     * 修改用户密码
     */
    public function editpwd()
    {
        return view('admin.index.editpwd');
    }

    /**
     * 退出登录
     */
    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect()->action('admin\LoginController@login');
    }
}
