<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function admin()
    {
        return view('admin/dashboard');
    }
}
