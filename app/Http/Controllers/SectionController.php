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
        return view('sections.create', compact('section_types', 'count'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'position' => 'required',
        ]);

        Section::create($data);

        return redirect('home')->withMessage('بخش مورد نظر اضافه شد');
    }

    public function show(Section $section)
    {
        //
    }

    public function edit(Section $section)
    {
        dd("edit section $section->id");
    }

    public function update(Request $request, Section $section)
    {
        //
    }

    public function destroy(Section $section)
    {
        //
    }
}
