<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = auth()->user();
        if ($current_user->admin) {
            $sections = Section::orderBy('position')->get();
            return view('dashboards.admin', compact('sections'));
        }else {
            return view('dashboards.user');
        }
    }

}
