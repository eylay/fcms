<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function create()
    {
        $section_types = ['features', 'tabs', 'prices', 'cards', 'faq', 'clients', 'posts'];
        $count = Section::count();
        $section = new Section;
            return view('sections.create_or_edit', compact('section_types', 'count', 'section'));
    }

    // post request to sections
    public function store(Request $request)
    {
        $data = self::validation();
        Section::create($data);
        return redirect('home')->withMessage('بخش مورد نظر اضافه شد');
    }

    public function edit(Section $section)
    {
        $section_types = ['features', 'tabs', 'prices', 'cards', 'faq', 'clients', 'posts'];
        return view('sections.create_or_edit', compact('section_types', 'section'));
    }

    // put request sections/{id}
    public function update(Request $request, Section $section)
    {
        $data = self::validation();
        $section->update($data);
        return redirect('home')->withMessage('بخش مورد نظر ویرایشس شد');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return back()->withMessage('بخش مورد نظر حذف شد.');
    }

    public function visibility(Section $section)
    {
        $section->visible = !$section->visible;
        $section->save();
        return back()->withMessage('تغییرات مورد نظر اعمال شد');
    }

    public static function validation()
    {
        return request()->validate([
            'type' => 'required',
            'position' => 'required',
            'title' => 'nullable',
            'description' => 'nullable',
        ]);
    }
}
