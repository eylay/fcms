<?php

namespace App\Http\Controllers;
use App\Header;
use App\Footer;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        $footer = Footer::first() ?? new Footer;
        return view('index',compact('header', 'footer'));
    }
}
