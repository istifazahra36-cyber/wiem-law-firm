@extends('layouts.app')
@section('title', 'Home')

@section('content')
@php
    $heroImage = $page?->image ?: 'images/law.jpg';
    $title = $page?->title ?: 'Strategic Legal Partner for Modern Business';
    $subtitle = $page?->subtitle ?: 'Corporate legal assistance with a practical, fast, and precise approach to support your business decisions.';
    $body = $page?->body ?: "WIEM is a law firm with global network in providing Legal Audit, Documents and Advisory services.\n\nWith deep understanding of local experience, we provide sophisticated advice on corporate and commercial business across a broad range of industries.";
@endphp

<div class="vh-100 d-flex align-items-center justify-content-center text-center text-white position-relative"
    style="background: url('{{ asset($heroImage) }}') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    <div class="position-relative px-3">
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">{{ $title }}</h1>
        <p class="lead mt-3">{{ $subtitle }}</p>
        @if($page?->button_text && $page?->button_url)
            <a href="{{ $page->button_url }}" class="btn btn-warning mt-3 px-4">{{ $page->button_text }}</a>
        @endif
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="fw-bold mb-4" style="color:#b8962e; font-family: serif;">The best team to take care of your business.</h1>
            @foreach(explode("\n\n", $body) as $paragraph)
                <p class="text-muted">{!! nl2br(e($paragraph)) !!}</p>
            @endforeach
            <a href="/about" class="btn btn-warning mt-3 px-4">See more</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/logo.webp') }}" class="img-fluid" style="max-width: 400px;" alt="Wiem Law">
        </div>
    </div>
</div>
@endsection
