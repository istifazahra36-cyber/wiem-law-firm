@extends('layouts.admin')
@section('title', 'Dispute Services')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 mb-0">Dispute Services</h2>
    <a href="/admin/dispute-services/create" class="btn btn-dark">Tambah Service</a>
</div>

@include('admin.service-table', ['services' => $services, 'base' => '/admin/dispute-services'])
@endsection
