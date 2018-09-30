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
        return view('headers.edit',compact('header'));
    }

    public function update(Request $request, Header $header)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'btn_name' => 'nullable',
            'btn_link' => 'nullable',
            'description' => 'nullable|string|max:1000',
            'mobile_visible' => 'nullable|boolean',
            'preloader' => 'nullable|boolean',
        ]);

        $header->update($data);

        return back();
    }

}
