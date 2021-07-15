<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function doc()
    {
        return view('admin.example.doc');
    }

    public function gallery()
    {
        return view('admin.example.gallery');
    }

    public function config()
    {
        return view('admin.example.config');
    }

    public function rabc()
    {
        return view('admin.example.rabc');
    }

    public function adddoc()
    {
        return view('admin.example.adddoc');
    }

    public function guide()
    {
        return view('admin.example.guide');
    }

    public function datatable()
    {
        return view('admin.example.datatable');
    }

    public function error()
    {
        return view('admin.example.error');
    }
}
