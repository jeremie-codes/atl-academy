@extends('layouts.base')

@section('title')
    A propos
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="pb-5 col-md-9 ftco-animate">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span>
                    <span>A propos <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">A propos de nous</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="about-wrap img w-100" style="background-image: url({{ asset( $about->image ?? 'assets/images/img-5.webp') }});">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
                </div>
            </div>
            <div class="py-5 col-md-6 pl-md-5">
                <div class="mb-4 row justify-content-center pt-md-4">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Bienvenue !</span>
                        <h2 class="mb-4">AFRICA TRANSPORT & LOGISTIC ACADEMY</h2>
                        <div class="d-flex about">
                            <h3>{{ $about->subtitle ?? null }} </h3>
                        </div>
                        {!! $about->description ?? null !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
    <div class="img image-overlay" style="background-image: url({{ asset('assets/images/about-3.jpg') }});"></div>
    <div class="container">
        <div class="row no-gutters">
            <div class="py-5 col-md-6 bg-secondary aside-stretch">
                <div class="p-4 heading-section heading-section-white pl-md-0 py-md-5 pr-md-5">
                    <span class="subheading">Africa Transport and Logistic Academy</span>
                    <h2 class="mb-4">Former les professionnels du transport et de la logistique de demain</h2>
                    <h4>Des formations pratiques, modernes et orientées vers l’employabilité.</h4>
                    <p>
                        Africa Transport and Logistic Academy est un centre de formation spécialisé
                        dans les métiers du transport, de la logistique et de la supply chain.
                        Nous accompagnons les étudiants et les professionnels dans le développement
                        de compétences solides, adaptées aux réalités du marché africain et international.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-engineer"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="1200">0</strong>
                                <span>Apprenants formés</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex counter-wrap ftco-animate">
                        <div class="block-18 d-flex align-items-center justify-content-between">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-worker-1"></span>
                            </div>
                            <div class="text">
                                <strong class="number" data-number="95">0</strong>
                                <span>Taux de satisfaction (%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="pb-3 row justify-content-center">
            <div class="text-center col-md-10 heading-section ftco-animate">
                <span class="subheading">Academy</span>
                <h2 class="mb-4">Nos partenaires</h2>
            </div>
        </div>

        <div class="container">
            <div class="overflow-hidden ftco-animate " style="overflow-x: hidden; ">
                <div class="d-flex partner-ticker">
                    @forelse($parteners as $partener)
                    <div class="logo-item"><img src="{{ asset($partener->image ?? null) }}" alt="Logo {{ $loop->index }}"></div>
                    @empty
                    <!-- SERIE ORIGINALE -->
                    <div class="logo-item"><img src="{{ asset('assets/images/1.jpeg') }}" alt="Logo 1"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/2.jpeg') }}" alt="Logo 2"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/3.jpeg') }}" alt="Logo 3"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/4.jpeg') }}" alt="Logo 4"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/6.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/7.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/8.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/icon.png') }}" alt="Logo 6"></div>

                    <!-- DOUBLE EXACT (pour la continuité) -->
                    <div class="logo-item"><img src="{{ asset('assets/images/1.jpeg') }}" alt="Logo 1"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/2.jpeg') }}" alt="Logo 2"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/3.jpeg') }}" alt="Logo 3"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/4.jpeg') }}" alt="Logo 4"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/6.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/7.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/8.jpeg') }}" alt="Logo 5"></div>
                    <div class="logo-item"><img src="{{ asset('assets/images/icon.png') }}" alt="Logo 6"></div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
