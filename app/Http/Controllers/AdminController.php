<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('admin/admin');
    }

    function pesanan()
    {
        return view('admin/pesanan');
    }


}