<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
        //
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

    public function show(Section $section)
    {
        //
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
        //
    }

    public static function validation()
    {
        return request()->validate([
            'type' => 'required',
            'position' => 'required',
        ]);
    }
}
