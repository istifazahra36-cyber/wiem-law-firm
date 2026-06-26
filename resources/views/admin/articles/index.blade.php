@extends('layouts.admin')
@section('title', 'Articles')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 mb-0">Articles</h2>
    <a href="/admin/articles/create" class="btn btn-dark">Tambah Article</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead><tr><th>Foto</th><th>Judul</th><th>Tag</th><th class="text-end">Aksi</th></tr></thead>
            <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td style="width: 110px;">
                            @if($article->image)
                                <img src="{{ asset($article->image) }}" alt="{{ $article->name }}" class="img-fluid rounded" style="height: 70px; object-fit: cover;">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->tag }}</td>
                        <td class="text-end">
                            <a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/admin/articles/{{ $article->id }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus article ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="text-center text-muted py-4">Belum ada article.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
