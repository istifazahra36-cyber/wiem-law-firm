<?php

namespace App\Http\Controllers;

use App\Models\PageContent;

class HomeController extends Controller
{
    public function index()
    {
        $page = PageContent::where('slug', 'home')->first();

        return view('pages.home', compact('page'));
    }
}
