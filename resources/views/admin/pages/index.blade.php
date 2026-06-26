@extends('layouts.admin')
@section('title', 'Pages')

@section('content')
<h2 class="h3 mb-4">Pages & Contact</h2>
<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead><tr><th>Slug</th><th>Title</th><th>Subtitle</th><th class="text-end">Aksi</th></tr></thead>
            <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td><span class="badge bg-dark">{{ $page->slug }}</span></td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->subtitle }}</td>
                        <td class="text-end">
                            <a href="/admin/pages/{{ $page->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
