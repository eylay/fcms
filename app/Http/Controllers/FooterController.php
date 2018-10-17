<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function edit(Footer $footer)
    {
        return view('footers.edit',compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        dd($request->all());
    }
}
