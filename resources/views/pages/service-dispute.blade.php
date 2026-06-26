@extends('layouts.app')
@section('title', 'Dispute Resolution')

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
    style="background: url('{{ asset('images/dispute.jpg') }}') center/cover no-repeat; min-height: 85vh;">

    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-75"></div>

    <div class="position-relative">
        <h1 class="display-4 fw-bold" style="color:white; font-family: serif;">
            Dispute Resolution
        </h1>

        <p class="lead mt-3">
            Strategic representation and rapid resolution for complex disputes.
        </p>
        <p class="lead mt-3">
            Our Dispute Resolution team is known for its tactical approach in litigation, arbitration, and mediation, delivering effective results for our clients.

        </p>
    </div>

    
    
</div>
<div class="container py-5 text-center">

    <div class="row justify-content-center">
        @forelse($disputes as $dispute)

        <div class="col-md-5 mb-4">
            <div class="card card-hover border-0 shadow-lg h-100 text-center p-4 w-75 mx-auto">

                <div class="mb-3">
                    <div class="bg-dark text-warning d-inline-flex align-items-center justify-content-center rounded"
                        style="width:50px; height:50px;">
                    </div>
                </div>

                <h5 class="fw-bold" style="font-family: serif;">{{$dispute->name}}</h5>

                <p class="text-muted">
                    {{$dispute->description}}
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
        Effective Dispute Management
    </h2>

        <p class="lead mt-3">
            Contact our experts for confidential consultation on litigation and arbitration.
        </p>
    </div>

    </div>

</div>

@endsection