@extends('layouts.admin')
@section('title', 'Edit Article')

@section('content')
<h2 class="h3 mb-4">Edit Article</h2>
<form action="/admin/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data" class="card border-0 shadow-sm p-4">
    @csrf
    @method('PUT')
    @include('admin.articles.form', ['article' => $article])
    <div class="mt-3">
        <button class="btn btn-dark" type="submit">Update</button>
        <a href="/admin/articles" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
