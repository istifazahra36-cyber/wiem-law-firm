<?php

namespace App\Http\Controllers;

use App\Models\CorporateService;
use App\Models\DisputeService;

class ServiceController extends Controller
{
    //
    public function indexCorporate()
    {
        $corporates = CorporateService::all();

        return view('pages.service-corporate', compact('corporates'));
    }

    public function indexDispute()
    {
        $disputes = DisputeService::all();

        return view('pages.service-dispute', compact('disputes'));
    }
}
