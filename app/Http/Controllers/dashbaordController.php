<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbaordController extends Controller
{
    public function dashbaord()
    {
        return view('admin.dashbaord');
    }
    public function list()
    {
        return view('admin.admin.list');
    }
}
