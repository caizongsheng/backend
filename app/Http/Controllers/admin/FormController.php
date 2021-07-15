<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function elements()
    {
        return view('admin.form.elements');
    }

    public function radio()
    {
        return view('admin.form.radio');
    }

    public function checkbox()
    {
        return view('admin.form.checkbox');
    }

    public function switch()
    {
        return view('admin.form.switch');
    }
}
