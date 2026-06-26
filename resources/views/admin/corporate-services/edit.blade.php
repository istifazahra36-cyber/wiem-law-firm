@extends('layouts.admin')
@section('title', 'Edit Corporate Service')

@section('content')
<h2 class="h3 mb-4">Edit Corporate Service</h2>
<form action="/admin/corporate-services/{{ $service->id }}" method="POST" class="card border-0 shadow-sm p-4">
    @csrf
    @method('PUT')
    @include('admin.service-form', ['service' => $service])
    <div class="mt-3">
        <button class="btn btn-dark" type="submit">Update</button>
        <a href="/admin/corporate-services" class="btn btn-outline-secondary">Batal</a>
    </div>
</form>
@endsection
