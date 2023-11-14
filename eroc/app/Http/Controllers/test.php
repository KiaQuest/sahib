<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test()
    {
        return view('blank');
    }
    public function test2()
    {
        return view('table');
    }
}
