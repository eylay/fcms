<?php

namespace App\Http\Controllers;
use App\Header;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first();
        return view('index',compact('header'));
    }
}
