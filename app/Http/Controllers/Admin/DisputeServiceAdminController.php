<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DisputeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DisputeServiceAdminController extends Controller
{
    public function index(): View
    {
        return view('admin.dispute-services.index', [
            'services' => DisputeService::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.dispute-services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        DisputeService::create($this->validated($request));

        return redirect('/admin/dispute-services')->with('success', 'Dispute service berhasil ditambahkan.');
    }

    public function edit(DisputeService $disputeService): View
    {
        return view('admin.dispute-services.edit', ['service' => $disputeService]);
    }

    public function update(Request $request, DisputeService $disputeService): RedirectResponse
    {
        $disputeService->update($this->validated($request));

        return redirect('/admin/dispute-services')->with('success', 'Dispute service berhasil diperbarui.');
    }

    public function destroy(DisputeService $disputeService): RedirectResponse
    {
        $disputeService->delete();

        return redirect('/admin/dispute-services')->with('success', 'Dispute service berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
    }
}
