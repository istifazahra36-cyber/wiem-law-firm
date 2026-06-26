@extends('layouts.app')
@section('title', 'About')

@section('content')
@php
    $image = $page?->image ?: 'images/us.jpg';
    $title = $page?->title ?: 'About Us';
    $subtitle = $page?->subtitle ?: 'Excellence in legal services since establishment';
    $body = $page?->body ?: "WIEM is a law firm with global network in providing Legal Audit, Documents and Advisory services.\n\nWe bring an indepth understanding of Indonesia's business and legal culture in providing services to multinational corporations, joint ventures and domestic companies clients to execute even the most challenging deals.";
@endphp

<div class="py-5 d-flex align-items-center justify-content-center text-center text-white position-relative"
    style="background: url('{{ asset($image) }}') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>
    <div class="position-relative px-3">
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">{{ $title }}</h1>
        <p class="lead mt-3">{{ $subtitle }}</p>
    </div>
</div>

<div class="container py-5 text-center">
    <h2 class="fw-bold mb-4" style="color:#1c1c1c; font-family: serif;">The best team to take care of your business.</h2>

    @foreach(explode("\n\n", $body) as $paragraph)
        <p class="text-muted mx-auto" style="max-width:700px;">{!! nl2br(e($paragraph)) !!}</p>
    @endforeach

    <div class="row justify-content-center mt-5">
        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow-lg h-100 text-start p-4">
                <h5 class="fw-bold" style="font-family: serif;">Our People</h5>
                <p class="text-muted">We recruit strong legal talent and unite them through shared professional values.</p>
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <div class="card border-0 shadow-lg h-100 text-start p-4">
                <h5 class="fw-bold" style="font-family: serif;">Our Presence</h5>
                <p class="text-muted">Our presence in Indonesia helps us work closely with agencies, regulators, and industry players.</p>
            </div>
        </div>
    </div>
</div>
@endsection
