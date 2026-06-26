<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $page = PageContent::where('slug', 'contact')->first();

        return view('pages.contact', compact('page'));
    }
}
