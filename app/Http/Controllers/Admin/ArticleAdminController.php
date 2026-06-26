<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleAdminController extends Controller
{
    public function index(): View
    {
        return view('admin.articles.index', [
            'articles' => Article::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $data['image'] = $this->storeImage($request);

        Article::create($data);

        return redirect('/admin/articles')->with('success', 'Article berhasil ditambahkan.');
    }

    public function edit(Article $article): View
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $data = $this->validated($request, false);
        $oldImage = $article->image;

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeImage($request);
        }

        $article->update($data);

        if (isset($data['image'])) {
            $this->deleteImage($oldImage);
        }

        return redirect('/admin/articles')->with('success', 'Article berhasil diperbarui.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $this->deleteImage($article->image);
        $article->delete();

        return redirect('/admin/articles')->with('success', 'Article berhasil dihapus.');
    }

    private function validated(Request $request, bool $imageRequired = true): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tag' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'image' => [$imageRequired ? 'required' : 'nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);
    }

    private function storeImage(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $directory = public_path('uploads/articles');

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $file = $request->file('image');
        $filename = uniqid('article_', true).'.'.$file->getClientOriginalExtension();
        $file->move($directory, $filename);

        return 'uploads/articles/'.$filename;
    }

    private function deleteImage(?string $path): void
    {
        if (! $path) {
            return;
        }

        $fullPath = public_path($path);

        if (is_file($fullPath)) {
            unlink($fullPath);
        }
    }
}
