@extends('layouts.base')

@section('title')
    Formation
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="pb-5 col-md-9 ftco-animate">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span>
                    <span>Formations <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Formations</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="pb-3 mb-5 row justify-content-center">
            <div class="text-center col-md-7 heading-section ftco-animate">
                <span class="subheading">ATLA – Africa Transport and Logistic Academy</span>
                <h2 class="mb-4">Nos programmes de formation</h2>
            </div>
        </div>

        <div class="row">

            @forelse($formations as $formation)
            <div class="col-md-4">
                <div class="project">
                    <a href="{{ route('formation.show', $formation->id) }}" class="img d-flex align-items-center" style="background-image: url({{ asset($formation->image ?? 'assets/images/project-1.jpg') }});">
                    </a>
                    <a href="{{ route('formation.show', $formation->id) }}">
                        <div class="text">
                            <span class="subheading">Logistique</span>
                            <h3>Gestion logistique et supply chain</h3>
                            <p><span class="mr-1 fa fa-clock-o"></span> Formation certifiante</p>
                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="mt-5 col-md-12 d-flex justify-content-center">
                <div class="text-center col-md-12">
                    <i class='bx bx-layers-down-right fa-3x'></i>
                    <p>Aucune formation disponible.</p>
                </div>
            </div>
            @endforelse

        </div>

        @if ($formations->hasPages())
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
