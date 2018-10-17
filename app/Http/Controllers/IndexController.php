<?php

namespace App\Http\Controllers;
use App\Header;
use App\Footer;
use App\Message;
use App\Section;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        $footer = Footer::first() ?? new Footer;
        $sections = Section::orderBy('position')->get();
        return view('index',compact('header', 'footer', 'sections'));
    }

    public function store_message(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'subject' => 'nullable|string|max:191',
            'body' => 'required|string|max:1000',
        ]);

        Message::create($data);

        $result['success'] = true;
        $result['message'] = "پیام شما با موفقیت در سیستم ثبت شد.";

        return $result;
    }
}
