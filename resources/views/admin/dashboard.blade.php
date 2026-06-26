@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 mb-0">Dashboard Admin</h2>
    <a href="/admin/reports/articles/pdf" class="btn btn-warning">Download Report PDF</a>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-1">Articles</p><h3>{{ $articleCount }}</h3></div></div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-1">Corporate Services</p><h3>{{ $corporateCount }}</h3></div></div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-1">Dispute Services</p><h3>{{ $disputeCount }}</h3></div></div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm"><div class="card-body"><p class="text-muted mb-1">Pages</p><h3>{{ $pageCount }}</h3></div></div>
    </div>
</div>
@endsection
