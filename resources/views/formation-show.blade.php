@extends('layouts.base')

@section('title')
    Formation-Détails
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="pb-5 col-md-9 ftco-animate">
                <p class="breadcrumbs"><span>Formation <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">{{ $formation->title }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="col-md-12 d-flex align-items-center">
            <img src="{{ asset($formation->image ?? null) }}" alt="image" class="img-fluid" style="max-height: 700px">
        </div>

        <div class="row">

            <div class="mt-5 col-md-12 d-flex justify-content-center">
                <div class="text-center col-md-12">
                    {!! $formation->description ?? null !!}
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
