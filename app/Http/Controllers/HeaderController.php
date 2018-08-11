<?php

namespace App\Http\Controllers;

use App\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function edit(Header $header)
    {
        //
    }

    public function update(Request $request, Header $header)
    {
        //
    }

}
