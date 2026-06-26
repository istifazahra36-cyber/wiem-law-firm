<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\Admin\CorporateServiceAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DisputeServiceAdminController;
use App\Http\Controllers\Admin\PageContentAdminController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/service/corporate', [ServiceController::class, 'indexCorporate']);
Route::get('/service/dispute', [ServiceController::class, 'indexDispute']);
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article-detail/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('articles', ArticleAdminController::class)->except(['show']);
    Route::resource('corporate-services', CorporateServiceAdminController::class)->except(['show']);
    Route::resource('dispute-services', DisputeServiceAdminController::class)->except(['show']);
    Route::get('pages', [PageContentAdminController::class, 'index']);
    Route::get('pages/{page}/edit', [PageContentAdminController::class, 'edit']);
    Route::put('pages/{slug}', [PageContentAdminController::class, 'update']);
    Route::get('reports/articles/pdf', [ReportController::class, 'articlesPdf']);
});
