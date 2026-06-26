@extends('layouts.app')
@section('title', 'Corporate & Commercial')

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

<div class=" d-flex align-items-center justify-content-center text-center text-white position-relative"
    style="background: url('{{ asset('images/corporate.jpg') }}') center/cover no-repeat; min-height: 85vh;">

    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

    <div class="position-relative">
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">
            Corporate & Commercial
        </h1>

        <p class="lead mt-3">
            Comprehensive legal solutions for your business growth and stability.
        </p>
        <p class="lead mt-3">
            Our Corporate & Commercial practice provides end-to-end legal support for businesses of all sizes, ensuring regulatory compliance and strategic growth.

        </p>
    </div>

    
    
</div>
<div class="container py-5 text-center">

    <div class="row justify-content-center">
        @forelse($corporates as $corporate)

        <div class="col-md-5 mb-4">
            <div class="card card-hover border-0 shadow-lg h-100 text-center p-4 w-75 mx-auto">

                <div class="mb-3">
                    <div class="bg-dark text-warning d-inline-flex align-items-center justify-content-center rounded"
                        style="width:50px; height:50px;">
                    </div>
                </div>

                <h5 class="fw-bold" style="font-family: serif;">{{$corporate->name}}</h5>

                <p class="text-muted">
                    {{$corporate->description}}
                </p>

            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">Tidak ada proyek yang tersedia.</p>
        </div>
        @endforelse
        <hr>

    <div class="position-relative">
       <h2 class="fw-bold mb-4" style="color:#1c1c1c; font-family: serif;">
        Need corporate legal advice?
    </h2>

        <p class="lead mt-3">
            Our experienced team is ready to assist you with your business legal matters.
        </p>
    </div>
    </div>

</div>

@endsection