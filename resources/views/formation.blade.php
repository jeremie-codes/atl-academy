@extends('layouts.base')

@section('title')
    Contacts
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span>
                    <span>Formations <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Formations</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">ATLA – Africa Transport and Logistic Academy</span>
                <h2 class="mb-4">Nos programmes de formation</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-1.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Logistique</span>
                            <h3>Gestion logistique et supply chain</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation certifiante</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-2.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Transport</span>
                            <h3>Gestion du transport et de la distribution</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation professionnelle</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-3.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Entrepôt</span>
                            <h3>Gestion des stocks et des entrepôts</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation pratique</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-4.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Douane</span>
                            <h3>Transit et formalités douanières</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation spécialisée</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-5.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Management</span>
                            <h3>Management des opérations logistiques</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation avancée</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-6.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Digital</span>
                            <h3>Outils numériques et systèmes logistiques</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation moderne</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-1.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Logistique</span>
                            <h3>Gestion logistique et supply chain</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation certifiante</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-2.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Transport</span>
                            <h3>Gestion du transport et de la distribution</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation professionnelle</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="project">
                    <a href="#!" class="img d-flex align-items-center" style="background-image: url({{ asset('assets/images/project-3.jpg') }});">
                    </a>
                    <a href="#!">
                        <div class="text">
                            <span class="subheading">Entrepôt</span>
                            <h3>Gestion des stocks et des entrepôts</h3>
                            <p><span class="fa fa-clock-o mr-1"></span> Formation pratique</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
