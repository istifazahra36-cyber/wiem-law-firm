@extends('layouts.app')
@section('title', 'Article')

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
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">
            Our Publication
        </h1>

        <p class="lead mt-3">
            Legal news, updates, and expert perspectives
        </p>
    </div>

</div>

<div class="container py-5 text-center">

    <div class="row justify-content-center">

    @forelse($articles as $article)

        @if($loop->first)
            <div class="col-12 mb-4">
                <div class="card border-0 shadow-lg text-center p-4 w-50 mx-auto">
                    @if($article->image)
                        <img src="{{ asset($article->image) }}" alt="{{ $article->name }}" class="img-fluid rounded mb-3" style="max-height: 280px; object-fit: cover;">
                    @endif

                    <h4 class="fw-bold" style="font-family: serif;">
                        {{ $article->name }}
                    </h4>

                    <p class="text-muted">
                        {{ \Illuminate\Support\Str::limit($article->description, 150) }}
                    </p>
                     <a href="{{ route('article.show', $article->id) }}" class="btn " style="background-color:#b8962e">Read more</a> 
                </div>
            </div>
        @else
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-lg text-center p-4 h-100">
                    @if($article->image)
                        <img src="{{ asset($article->image) }}" alt="{{ $article->name }}" class="img-fluid rounded mb-3" style="height: 180px; object-fit: cover;">
                    @endif

                    <h5 class="fw-bold" style="font-family: serif;">
                        {{ $article->name }}
                    </h5>

                    <p class="text-muted"
                       style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ $article->description }}
                    </p>
                    <a href="{{ route('article.show', $article->id) }}" class="btn" style="background-color:#b8962e">Read more</a>
                </div>
            </div>
        @endif

    @empty
        <div class="col-12">
            <p class="text-center">Tidak ada proyek yang tersedia.</p>
        </div>
    @endforelse

</div>

</div>

</div>


@endsection
