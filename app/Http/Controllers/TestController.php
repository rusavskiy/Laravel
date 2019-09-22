<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
//        $this->middleware($middleware);
    }

    public function index(Request $request)
    {
        return view('test.index', []);
    }
}
