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
            'bg_path' => 'nullable|mimes:jpeg,png,bmp,tiff|max:2000',
        ]);

        if ($photo = $request->bg_path) {

            if (file_exists($header->bg_path)) {
                \File::delete($header->bg_path);
            }

            $relarive_path = "storage/app/public";
            $file_name = rs() . '.' . $photo->getClientOriginalExtension();
            $result = $photo->move(base_path($relarive_path),$file_name);
            $data['bg_path'] = 'storage/' . $file_name;
        }

        $header->update($data);

        return back()->withMessage('هدر با موفقیت ویرایش شد.');
    }

}
