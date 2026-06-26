@extends('layouts.admin')
@section('title', 'Tambah Corporate Service')

@section('content')
<h2 class="h3 mb-4">Tambah Corporate Service</h2>
<form action="/admin/corporate-services" method="POST" class="card border-0 shadow-sm p-4">
    @csrf
    @include('admin.service-form', ['service' => null])
    <div class="mt-3">
        <button class="btn btn-dark" type="submit">Simpan</button>
        <a href="/admin/corporate-services" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
