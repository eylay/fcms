<?php

namespace App\Http\Controllers;

use App\Content;
use App\Section;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function edit(Section $section)
    {
        $contents = count($section->contents) ? $section->contents : [new Section];
        return view('contents.edit', compact('section', 'contents'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate(['position'=>'required']);
        $result = self::prepare($request->all(), $section->id);
        Content::where('section_id', $section->id)->delete();
        Content::insert($result);
        return back()->withMessage('اطلاعات وارد شده ثبت شد.');
    }

    public static function prepare($data, $section_id)
    {
        $result = [];
        $count = count($data['position']);
        $uploadables = Section::uploadable_contents();
        foreach ($data as $key => $array) {
            if (is_array($array)) {
                foreach ($array as $i => $value) {
                    if (in_array($key, $uploadables)) {
                        // TODO: send prev file address for deleting prev file
                        for ($j=0; $j < $count ; $j++) {
                            $result[$j][$key] = isset($data[$key][$j]) ? upload($value) : null;
                        }
                    }else {
                        $result[$i][$key] = $value;
                    }
                    $result[$i]['section_id'] = $section_id;
                }
            }
        }
        return $result;
    }
}
