@extends('layouts.base')

@section('title')
    Accueil
@endsection

@section('content')
<section class="hero-wrap js-fullheight" style="background-image: url({{ asset('assets/images/banner.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-lg-6 ftco-animate">
					<div class="mt-5">
						<h1 class="mb-4">Une formation <br>Un métier <br>Un avenir</h1>
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						<p>
							<a href="#" class="btn btn-primary">Nos Formations</a>
							<a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">S'inscrire</a>
						</p>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
    <div class="container">
        <div class="row no-gutters d-flex">
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer-1"></span></div>
                    <div class="pl-4 media-body">
                        <h3 class="mb-3 heading">Excellence professionnelle</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services services-2 d-flex">
                    <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-worker-1"></span></div>
                    <div class="pl-4 media-body">
                        <h3 class="mb-3 heading">Innovation et pratique</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer"></span></div>
                    <div class="pl-4 media-body">
                        <h3 class="mb-3 heading">Employabilité et impact</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
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

<section class="ftco-section">
    <div class="container">
        <div class="pb-3 mb-5 row justify-content-center">
            <div class="text-center col-md-7 heading-section ftco-animate">
                <span class="subheading">ATLA – Africa Transport and Logistic Academy</span>
                <h2 class="mb-4">Nos programmes de formation</h2>
            </div>
        </div>

        <div class="row">

            @forelse($formations->take(6) as $formation)
            <div class="col-md-4">
                <div class="project">
                    <a href="{{ route('formation.show', $formation->id) }}" class="img d-flex align-items-center" style="background-image: url({{ asset($formation->image ?? 'assets/images/project-1.jpg') }});">
                    </a>
                    <a href="{{ route('formation.show', $formation->id) }}" style="color: #000">
                        <div class="text">
                            <span class="subheading">{{ $formation->category->name ?? null }}</span>
                            <h3>{{ $formation->title ?? null }}</h3>
                            <p style="color: #000">
                                @if (strlen($formation->description) > 150)
                                {!! substr($formation->description, 0, 150) . '...' ?? null !!}
                                @else
                                {!! $formation->description ?? null !!}
                                @endif
                            </p>
                            <p class="text-danger"><span class="mr-1 fa fa-clock-o"></span> Formation certifiante</p>
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

            @if($formations->count() >= 6)
            <div class="mt-5 col-md-12 d-flex justify-content-center">
                <a href="{{ route('formations') }}" class="btn btn-primary">Voir tous nos programmes</a>
            </div>
            @endif
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="p-4 col-md-6 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                <div class="heading-section heading-section-white">
                    <span class="subheading" style="color:#fff;">Témoignages</span>
                    <h2 class="mb-4" style="font-size: 50px;">
                        Ce que nos apprenants et partenaires disent de nous.
                    </h2>
                </div>
            </div>
            <div class="py-4 col-md-6 pl-md-5 py-md-5 aside-stretch-right">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    @foreach($testimonies as $testimony)
                    <div class="item">
                        <div class="py-4 pb-5 testimony-wrap d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url({{ asset($testimony->image ?? 'assets/images/person_1.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                {!! $testimony->description ?? null !!}
                                <p class="name">{{ $testimony->name ?? null }}</p>
                                <span class="position">{{ $testimony->type ?? null }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="item">
                        <div class="py-4 pb-5 testimony-wrap d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_1.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    La formation en logistique suivie à Africa Transport and Logistic Academy
                                    m’a permis d’acquérir des compétences pratiques directement applicables
                                    dans mon travail. Les formateurs sont très expérimentés.
                                </p>
                                <p class="name">Jean M.</p>
                                <span class="position">Apprenant</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="py-4 pb-5 testimony-wrap d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_2.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Une académie sérieuse avec une approche orientée vers la pratique
                                    et l’employabilité. Grâce à cette formation, j’ai pu évoluer
                                    rapidement dans le secteur du transport.
                                </p>
                                <p class="name">Amina K.</p>
                                <span class="position">Professionnelle du transport</span>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="py-4 pb-5 testimony-wrap d-flex justify-content-between align-items-end">
                            <div class="user-img" style="background-image: url({{ asset('assets/images/person_3.jpg') }})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-4">
                                    Africa Transport and Logistic Academy forme des profils compétents
                                    et opérationnels. Nos collaborations ont toujours été
                                    professionnelles et efficaces.
                                </p>
                                <p class="name">Paul D.</p>
                                <span class="position">Partenaire entreprise</span>
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
