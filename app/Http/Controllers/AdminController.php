<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.product');
    }

    public function category()
    {
        return view('pages.admin.category');
    }

    public function article()
    {
        return view('pages.admin.article');
    }

    public function voucher()
    {
        return view('pages.admin.voucher');
    }
}
