<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem as Item;

class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function edit()
    {
        $items = Item::orderBy('position')->get();
        return view('menu.edit', compact('items'));
    }

    public function update(Request $request)
    {
        Item::truncate();
        for ($i=0; $i < count($request->position) ; $i++) {
            $data = [];
            $data['position'] = $request->position[$i];
            $data['name'] = $request->name[$i];
            $data['icon'] = $request->icon[$i];
            Item::create($data);
        }
        return back()->withMessage('منوی سایت ویرایش شد.');
    }
}
