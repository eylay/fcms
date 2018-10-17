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
        $section_types = ['a', 'b', 'c'];
        return view('sections.create', compact('section_types'));
    }

    public function store(Request $request)
    {
        dd('store');
    }

    public function show(Section $section)
    {
        //
    }

    public function edit(Section $section)
    {
        //
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
