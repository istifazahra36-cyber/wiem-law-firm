<?php

namespace App\Http\Controllers;

use App\Models\PageContent;

class AboutController extends Controller
{
    public function index()
    {
        $page = PageContent::where('slug', 'about')->first();

        return view('pages.about', compact('page'));
    }
}
