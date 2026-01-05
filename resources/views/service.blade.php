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
                    <span>Services <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Services</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
<div class="container">
    <div class="pb-3 mb-5 row justify-content-center">
        <div class="text-center col-md-7 heading-section ftco-animate">
            <span class="subheading">ATL –  GROUP</span>
            <h2 class="mb-4">Nos services</h2>
        </div>
    </div>

    <div class="row d-flex">
        @forelse($services as $service)
        <div class="col-lg-4 ftco-animate">
            <div class="blog-entry border">
                <a href="blog-single.html" class="{{ $service->image ? 'block-20': '' }}" style="background-image: url({{ asset($service->image) }});"></a>
                <div class="text d-block">
                    {{-- <div class="meta">
                        <p>
                            <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                            <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                            <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                        </p>
                    </div> --}}
                    <h3 class="heading"><a href="#">{{ $service->nom ?? null }}</a></h3>
                    <div style="flex-wrap: no-wrap; width: 100%; overflow-x: hidden">
                        {!! $service->description !!}
                    </div>
                    <p><a href="{{ $service->url }}" class="btn btn-secondary py-2 px-3">Voir Plus</a></p>
                </div>
            </div>
        </div>
        @empty
        <div class="mt-5 col-md-12 d-flex justify-content-center">
            <div class="text-center col-md-12">
                <i class='bx bx-layers-down-right fa-3x'></i>
                <p>Aucun service disponible.</p>
            </div>
        </div>
        @endforelse
    </div>

    @if ($services->hasPages())
    <div class="mt-5 row">
        <div class="text-center col">
            <div class="block-27">
                <ul>

                    {{-- Bouton précédent --}}
                    <li class="{{ $services->onFirstPage() ? 'disabled' : '' }}">
                        @if ($services->onFirstPage())
                            <span>&lt;</span>
                        @else
                            <a href="{{ $services->previousPageUrl() }}">&lt;</a>
                        @endif
                    </li>

                    {{-- Pages --}}
                    @foreach ($services->links()->elements[0] ?? [] as $page => $url)
                        <li class="{{ $page == $services->currentPage() ? 'active' : '' }}">
                            @if ($page == $services->currentPage())
                                <span>{{ $page }}</span>
                            @else
                                <a href="{{ $url }}">{{ $page }}</a>
                            @endif
                        </li>
                    @endforeach

                    {{-- Bouton suivant --}}
                    <li class="{{ $services->hasMorePages() ? '' : 'disabled' }}">
                        @if ($services->hasMorePages())
                            <a href="{{ $services->nextPageUrl() }}">&gt;</a>
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
