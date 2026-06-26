@extends('layouts.admin')
@section('title', 'Tambah Article')

@section('content')
<h2 class="h3 mb-4">Tambah Article</h2>
<form action="/admin/articles" method="POST" enctype="multipart/form-data" class="card border-0 shadow-sm p-4">
    @csrf
    @include('admin.articles.form', ['article' => null])
    <div class="mt-3">
        <button class="btn btn-dark" type="submit">Simpan</button>
        <a href="/admin/articles" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
