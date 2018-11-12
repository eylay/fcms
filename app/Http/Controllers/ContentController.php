<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function edit(Section $section)
    {
        $contents = count($section->contents) ? $section->contents : [new Section];
        return view('contents.edit', compact('section', 'contents'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate(['position'=>'required']);
        $result = self::prepare($request->all(), $section);
        Content::where('section_id', $section->id)->delete();
        Content::insert($result);
        return back()->withMessage('اطلاعات وارد شده ثبت شد.');
    }

    public static function prepare($data, $section)
    {

        // prepare necessary variables
        $result = [];
        $contents = $section->contents;
        $count = count($data['position']);
        $uploadables = Section::uploadable_contents();

        // loop through new data for uploading new files
        for ($j=0; $j < $count ; $j++) {
            foreach ($uploadables as $uploadable) {
                $prev_file = isset($contents[$j]) ? $contents[$j]->$uploadable : null;
                $result[$j][$uploadable] = isset($data[$uploadable][$j]) ? upload($data[$uploadable][$j], $prev_file) : $prev_file;
            }
        }

        // prepare result array
        foreach ($data as $key => $array) {
            if (is_array($array)) {
                foreach ($array as $i => $value) {
                    if (!in_array($key, $uploadables)) {
                        $result[$i][$key] = $value;
                    }
                    $result[$i]['section_id'] = $section->id;
                }
            }
        }

        return $result;
    }
}
