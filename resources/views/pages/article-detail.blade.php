@extends('layouts.app')
@section('title', 'Article Detail')

@section('content')
<style>
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-hover:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
</style>


<div class="py-5 d-flex align-items-center justify-content-center text-center text-white position-relative"
    style="background: url('{{ asset('images/us.jpg') }}') center/cover no-repeat;">

    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

    <div class="position-relative">
        <p>
            <span class="badge bg-dark px-3 py-2">
                {{ $articles->tag }}
            </span>
        </p>
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">
            {{$articles->name}}
        </h1>

        <!-- <p class="lead mt-3">
            Legal news, updates, and expert perspectives
        </p> -->
    </div>

</div>

<div class="container py-5 text-center">

    <div class="row justify-content-center">

        <div class="col-12 mb-4">
            <div class="card border-0 shadow-lg p-4">
                @if($articles->image)
                    <img src="{{ asset($articles->image) }}" alt="{{ $articles->name }}" class="img-fluid rounded mb-4 mx-auto" style="max-height: 420px; object-fit: cover;">
                @endif

                <p class="text-muted  mx-auto"
                    style="max-width: 800px; line-height: 1.8; text-align: justify;">
                    {!! nl2br(e($articles->description)) !!}
                </p>

                <hr>
                <a href="/article" class="btn text-center" style="background-color:#b8962e; width:100px;">
                    Back
                </a>
            </div>
        </div>

    </div>

</div>

</div>


@endsection
