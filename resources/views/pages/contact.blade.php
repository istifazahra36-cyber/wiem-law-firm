@extends('layouts.app')
@section('title', 'Contact')

@section('content')
@php
    $image = $page?->image ?: 'images/us.jpg';
@endphp

<div class="py-5 d-flex align-items-center justify-content-center text-center text-white position-relative"
    style="background: url('{{ asset($image) }}') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    <div class="position-relative px-3">
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">{{ $page?->title ?: 'Contact Us' }}</h1>
        <p class="lead mt-3">{{ $page?->subtitle ?: 'Talk with our legal team for your business needs.' }}</p>
    </div>
</div>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg p-4">
                <p class="text-muted">{!! nl2br(e($page?->body ?: 'Send your inquiry and our team will respond as soon as possible.')) !!}</p>
                <hr>
                <p><strong>Email:</strong> {{ $page?->email ?: 'info@wiemlaw.com' }}</p>
                <p><strong>Phone:</strong> {{ $page?->phone ?: '+62 812 3456 7890' }}</p>
                <p class="mb-0"><strong>Address:</strong> {{ $page?->address ?: 'Jakarta, Indonesia' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
