<?php

namespace App\Http\Controllers;

use App\Header;
use App\HeaderMobilePhoto;
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
            $data['bg_path'] = upload($photo, $header->bg_path);
        }

        if ($sliders = $request->slider) {
            foreach ($sliders as $slider) {
                $path = upload($slider);
                HeaderMobilePhoto::make($path);
            }
        }

        if ($photo_ids = $request->photo_ids) {
            foreach ($photo_ids as $id) {
                $photo_to_be_deleted = HeaderMobilePhoto::find($id);
                if (file_exists($photo_to_be_deleted->path)) {
                    \File::delete($photo_to_be_deleted->path);
                }
                $photo_to_be_deleted->delete();
            }
        }

        $header->update($data);

        return back()->withMessage('هدر با موفقیت ویرایش شد.');
    }

}
