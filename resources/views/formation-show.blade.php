@extends('layouts.base')

@section('title')
    Formation-Détails
@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/images/ban.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="pb-5 col-md-9 ftco-animate">
                    <p class="breadcrumbs"><span>Formation <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Détails</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $formation->title }}</h2>
                    <p>
                        <img src="{{ asset($formation->image ?? null) }}" alt="" class="img-fluid">
                    </p>
                    {!! $formation->description ?? null !!}
                </div>

                @if(empty(session('success')))
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="{{ route('formations.inscription') }}" method="POST" class="appointment-form ftco-animate">
                            @csrf
                            <h4 class="mb-4 text-left">Voulez-vous vous inscrire à cette formation?</h4>
                            <span class="text-muted">Remplissez ce formulaire et nous vous contacterons.</span>

                            <div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="full_name" placeholder="Nom Complet" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Adresse email (optionnel)">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" required>
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="form-group">
                                            <input class="form-control" hidden value="{{ $formation->id }}" required name="formation_id">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Message (optionnel)"></textarea>
                                </div>

                                <div class="text-center form-group">
                                    <input type="submit" value="S'inscrire maintenant" class="px-4 py-3 btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                @endif

            </div>
        </div>
    </section>

@endsection
