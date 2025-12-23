@extends('layouts.base')

@section('title')
    Galéries
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="pb-5 col-md-9 ftco-animate">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span>
                    <span>Galerie <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Galerie</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">

            @forelse($galeries as $galery)
            <div class="col-md-4">
                <div class="project">
                    <a href="{{ asset($galery->image ?? null) }}" class="img d-flex align-items-center" style="background-image: url({{ asset($galery->image ?? null) }});">
                        <div class="mb-5 icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-plus"></span>
                        </div>
                    </a>
                </div>
            </div>
            @empty

            @endforelse

        </div>

        @if ($galeries->hasPages())
        <div class="mt-5 row">
            <div class="text-center col">
                <div class="block-27">
                    <ul>

                        {{-- Bouton précédent --}}
                        <li class="{{ $formations->onFirstPage() ? 'disabled' : '' }}">
                            @if ($formations->onFirstPage())
                                <span>&lt;</span>
                            @else
                                <a href="{{ $formations->previousPageUrl() }}">&lt;</a>
                            @endif
                        </li>

                        {{-- Pages --}}
                        @foreach ($formations->links()->elements[0] ?? [] as $page => $url)
                            <li class="{{ $page == $formations->currentPage() ? 'active' : '' }}">
                                @if ($page == $formations->currentPage())
                                    <span>{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            </li>
                        @endforeach

                        {{-- Bouton suivant --}}
                        <li class="{{ $formations->hasMorePages() ? '' : 'disabled' }}">
                            @if ($formations->hasMorePages())
                                <a href="{{ $formations->nextPageUrl() }}">&gt;</a>
                            @else
                                <span>&gt;</span>
                            @endif
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
