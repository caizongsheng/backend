<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function buttons()
    {
        return view('admin.ui.buttons');
    }

    public function cards()
    {
        return view('admin.ui.cards');
    }

    public function grid()
    {
        return view('admin.ui.grid');
    }

    public function icons()
    {
        return view('admin.ui.icons');
    }

    public function tables()
    {
        return view('admin.ui.tables');
    }

    public function modals()
    {
        return view('admin.ui.modals');
    }

    public function popover()
    {
        return view('admin.ui.popover');
    }

    public function alerts()
    {
        return view('admin.ui.alerts');
    }

    public function pagination()
    {
        return view('admin.ui.pagination');
    }

    public function progress()
    {
        return view('admin.ui.progress');
    }

    public function tabs()
    {
        return view('admin.ui.tabs');
    }

    public function typography()
    {
        return view('admin.ui.typography');
    }

    public function step()
    {
        return view('admin.ui.step');
    }

    public function other()
    {
        return view('admin.ui.other');
    }

}
