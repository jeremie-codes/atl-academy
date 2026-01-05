<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/wilcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Dec 2025 18:08:31 GMT -->
<head>

	<title>
        ATLA | @yield('title')
    </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
	<style>

		.other-links {
			display: none;
		}

		@media only screen and (min-width: 992px) {
			.container-header {
				position: absolute;
				top: 20px;
				left: 0;
				right: 0;
				z-index: 1;
			}

			.other-links {
				display: flex;
			}
		}

		.partner-ticker {
			display: flex;
			width: max-content; /* Important pour que les logos ne s'écrasent pas */
			animation: scroll-infinite 25s linear infinite;
		}

		.logo-item {
			padding: 0 50px; /* Espacement entre les logos */
			flex-shrink: 0;
		}

		.logo-item img {
			height: 150px; /* Fixez une hauteur pour l'alignement */
			width: auto;
			opacity: 0.9;
			transition: opacity 0.3s;
		}

		.logo-item img:hover {
			opacity: 1;
		}

		@keyframes scroll-infinite {
			0% {
				transform: translateX(0);
			}
			100% {
				transform: translateX(-50%); /* On glisse jusqu'à la moitié */
			}
		}

		/* Optionnel : Stopper au survol pour laisser lire */
		.partner-ticker:hover {
			animation-play-state: paused;
		}

        .bg-success {
            background: #19c477;
        }

	</style>
</head>
<body>

    @if(session('error'))
        <div style="z-index: 999; color: white; position: fixed; top: 0; left: 0; right: 0"
            class="alert alert-page-error bg-primary fade show"
            role="alert"
        >
            <strong>Erreur !</strong> {{ session('error') }}
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.alert-page-error').style.display = 'none'
            }, 8000);
        </script>
    @endif

    @if(session('success'))
        <div style="z-index: 999; color: white; position: fixed; top: 0; left: 0; right: 0"
            class="alert alert-page-success bg-success fade show"
            role="alert"
        >
            <strong>Success !</strong> {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                document.querySelector('.alert-page-success').style.display = 'none'
            }, 8000);
        </script>
    @endif

    {{-- Header Section --}}
	<div class="px-0 pr-md-5 pl-md-5 container-header">
		<div class="pt-3 pb-2 bg-light" style="opacity: .8;">
			<div class="container">
				<div class="px-3 row d-flex align-items-start align-items-center px-md-0">
					<div class="mb-2 col-md-4 d-flex mb-md-0">
						<a class="navbar-brand d-flex align-items-center" href="/">
							<img src="{{ asset('assets/images/icon-dark.png') }}" alt="logo" width="165">
						</a>
					</div>

					<div class="col justify-content-between align-items-center other-links ">
						<div class="mb-2 col-md-6 d-flex topper mb-md-0 align-items-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="fa fa-map"></span>
							</div>
							<div class="pl-3 pr-md-4 pl-md-3 text">
								<p class="con"><span>Phone</span> <span>{{ $contacts[0]->phone ?? "+243 000 000 000"}}</span></p>
								<p class="con">Assistance clientèle 24h/24 et 7j/7</p>
							</div>
						</div>
						<div class="col-md-6 d-flex topper mb-md-0 align-items-center">
							<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
							</div>
							<div class="pl-3 text pl-md-3">
								<p class="hr"><span>Notre emplacement</span></p>
								<p class="con">
                                    {{ strlen($contacts[0]->addresss ?? '') > 30
                                        ? substr($contacts[0]->addresss, 0, 30)
                                        : ($contacts[0]->addresss ?? '112, Av. SONGOLOLO, Kinshasa-RDC')
                                    }}
                                </p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="mr-auto navbar-nav" style="letter-spacing: -10px;">
					<li class="nav-item {{ Route::is('home') ? 'active': '' }}"><a href="/" class="nav-link" style="letter-spacing: 0px;">Accueil</a></li>
					<li class="nav-item {{ Route::is('about') ? 'active': '' }}"><a href="{{ route('about') }}" class="nav-link" style="letter-spacing: 0px;">A propos de nous</a></li>
					<li class="nav-item {{ Route::is('formations') ? 'active': '' }}"><a href="{{ route('formations') }}" class="nav-link" style="letter-spacing: 0px;">Nos formations</a></li>
					<li class="nav-item {{ Route::is('services') ? 'active': '' }}"><a href="{{ route('services') }}" class="nav-link" style="letter-spacing: 0px;">Nos services</a></li>
					<li class="nav-item {{ Route::is('contacts') ? 'active': '' }}"><a href="{{ route('contacts') }}" class="nav-link" style="letter-spacing: 0px;">Contacts</a></li>
				</ul>
				<a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">S'inscrire maintenant</a>
			</div>
		</div>
	</nav>

	{{-- End Header Section --}}

    @yield('content')

	<footer class="ftco-footer">
		<div class="container pb-4 mb-5">
			<div class="row">
				<div class="col-md-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2 d-flex align-items-center">À propos</h2>
						<p>
							Africa Transport and Logistic Academy est un centre de formation
							spécialisé dans le transport, la logistique et la supply chain,
							orienté vers la pratique et l’employabilité.
						</p>
						<ul class="mt-4 ftco-footer-social list-unstyled">
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Liens rapides</h2>
						<div class="d-flex">
							<ul class="list-unstyled">
								<li><a href="#"><span class="mr-2 fa fa-chevron-right"></span>Accueil</a></li>
								<li><a href="#"><span class="mr-2 fa fa-chevron-right"></span>À propos</a></li>
								<li><a href="#"><span class="mr-2 fa fa-chevron-right"></span>Nos formations</a></li>
								<li><a href="#"><span class="mr-2 fa fa-chevron-right"></span>Galerie</a></li>
								<li><a href="#"><span class="mr-2 fa fa-chevron-right"></span>Contact</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Des questions ?</h2>
						<div class="mb-3 block-23">
							<ul>
								<li>
									<span class="mr-3 fa fa-map-marker"></span>
									<span class="text"> {{ $contacts[0]->address ?? '112, Av. SONGOLOLO (au croisement de l’avenue Kasa-vubu) Commune de Kinshasa Ville Kinshasa-RDC'}} </span>
								</li>
								<li>
									<a href="#">
										<span class="mr-3 fa fa-phone"></span>
										<span class="text">{{ $contacts[0]->phone ?? "+243 000 000 000"}}</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="mr-3 fa fa-paper-plane"></span>
										<span class="text">{{ $contacts[0]->email ?? "contact@africatl-group.com"}}</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid bg-primary">
			<div class="container">
				<div class="row">
					<div class="py-3 col-md-6 aside-stretch">
						<p class="mb-0">
							Copyright &copy;
							<script>document.write(new Date().getFullYear());</script>
							Africa Transport and Logistic Academy. Tous droits réservés.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fa fa-close"></span>
                    </button>
                </div>

                <div class="p-4 modal-body p-md-5">
                    <form action="{{ route('formations.inscription') }}" method="POST" class="appointment-form ftco-animate">
                        @csrf
                        <h3 class="mb-4 text-center">Inscription à une formation</h3>

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
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select class="form-control" required name="formation_id">
                                            <option value="" >Choisir une formation</option>
                                            @foreach ($formationAll as $formation)
                                                <option value="{{ $formation->id }}">{{ $formation->title }}</option>
                                            @endforeach
                                        </select>
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
        </div>
    </div>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
	<script src="{{ asset('assets/js/google-map.js') }}"></script>

	<script src="{{ asset('assets/js/main.js') }}"></script>

	<script defer src="{{ asset('assets/js/others.js') }}" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"cd0b4b3a733644fc843ef0b185f98241","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/wilcon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Dec 2025 18:09:52 GMT -->
</html>
