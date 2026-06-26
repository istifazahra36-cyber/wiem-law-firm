<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageContentAdminController extends Controller
{
    public function index(): View
    {
        $this->ensureDefaults();

        return view('admin.pages.index', [
            'pages' => PageContent::orderBy('slug')->get(),
        ]);
    }

    public function edit(PageContent $page): View
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, string $slug): RedirectResponse
    {
        $page = PageContent::firstOrCreate(['slug' => $slug], [
            'title' => ucfirst($slug),
        ]);

        $page->update($request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'body' => ['nullable', 'string'],
            'button_text' => ['nullable', 'string', 'max:100'],
            'button_url' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:100'],
            'address' => ['nullable', 'string', 'max:255'],
        ]));

        return redirect('/admin/pages')->with('success', 'Konten halaman berhasil diperbarui.');
    }

    private function ensureDefaults(): void
    {
        foreach (['home', 'about', 'contact'] as $slug) {
            PageContent::firstOrCreate(['slug' => $slug], [
                'title' => ucfirst($slug),
            ]);
        }
    }
}
