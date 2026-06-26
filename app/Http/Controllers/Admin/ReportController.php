<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;

class ReportController extends Controller
{
    public function articlesPdf(): Response
    {
        $pdf = Pdf::loadView('admin.reports.articles-pdf', [
            'articles' => Article::latest()->get(),
        ]);

        return $pdf->download('article-report.pdf');
    }
}
