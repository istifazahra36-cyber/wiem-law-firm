<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\CorporateService;
use App\Models\DisputeService;
use App\Models\PageContent;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'articleCount' => Article::count(),
            'corporateCount' => CorporateService::count(),
            'disputeCount' => DisputeService::count(),
            'pageCount' => PageContent::count(),
        ]);
    }
}
