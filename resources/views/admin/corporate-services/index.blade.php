@extends('layouts.admin')
@section('title', 'Corporate Services')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 mb-0">Corporate Services</h2>
    <a href="/admin/corporate-services/create" class="btn btn-dark">Tambah Service</a>
</div>

@include('admin.service-table', ['services' => $services, 'base' => '/admin/corporate-services'])
@endsection
