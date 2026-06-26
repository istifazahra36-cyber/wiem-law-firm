<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CorporateService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CorporateServiceAdminController extends Controller
{
    public function index(): View
    {
        return view('admin.corporate-services.index', [
            'services' => CorporateService::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.corporate-services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        CorporateService::create($this->validated($request));

        return redirect('/admin/corporate-services')->with('success', 'Corporate service berhasil ditambahkan.');
    }

    public function edit(CorporateService $corporateService): View
    {
        return view('admin.corporate-services.edit', ['service' => $corporateService]);
    }

    public function update(Request $request, CorporateService $corporateService): RedirectResponse
    {
        $corporateService->update($this->validated($request));

        return redirect('/admin/corporate-services')->with('success', 'Corporate service berhasil diperbarui.');
    }

    public function destroy(CorporateService $corporateService): RedirectResponse
    {
        $corporateService->delete();

        return redirect('/admin/corporate-services')->with('success', 'Corporate service berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
    }
}
