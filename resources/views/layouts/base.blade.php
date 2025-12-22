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

	</style>
</head>
<body>

    {{-- Header Section --}}
	<div class="px-0 pr-md-5 pl-md-5 container-header">
		<div class="pt-3 pb-2 bg-light" style="opacity: .8;">
			<div class="container">
				<div class="row d-flex align-items-start align-items-center px-3 px-md-0">
					<div class="col-md-4 d-flex mb-2 mb-md-0">
						<a class="navbar-brand d-flex align-items-center" href="/">
							<img src="{{ asset('assets/images/icon-dark.png') }}" alt="logo" width="165">
						</a>
					</div>

					<div class="col justify-content-between align-items-center other-links ">
						<div class="col-md-6 d-flex topper mb-md-0 mb-2 align-items-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="fa fa-map"></span>
							</div>
							<div class="pr-md-4 pl-md-3 pl-3 text">
								<p class="con"><span>Phone</span> <span>+243 123 456 910</span></p>
								<p class="con">Assistance clientèle 24h/24 et 7j/7</p>
							</div>
						</div>
						<div class="col-md-6 d-flex topper mb-md-0 align-items-center">
							<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
							</div>
							<div class="text pl-3 pl-md-3">
								<p class="hr"><span>Notre emplacement</span></p>
								<p class="con">112 av. SONGOLOLO, C/Kinshasa, Q/Djalo</p>
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
				<ul class="navbar-nav mr-auto">
					<li class="nav-item {{ Route::is('home') ? 'active': '' }}"><a href="/" class="nav-link">Accueil</a></li>
					<li class="nav-item {{ Request::is('about') ? 'active': '' }}"><a href="/about" class="nav-link">A propos</a></li>
					<li class="nav-item {{ Request::is('formations') ? 'active': '' }}"><a href="/formations" class="nav-link">Formations</a></li>
					<li class="nav-item {{ Request::is('galeries') ? 'active': '' }}"><a href="/galeries" class="nav-link">Galeries</a></li>
					<li class="nav-item {{ Request::is('contact') ? 'active': '' }}"><a href="/contact" class="nav-link">Contact</a></li>
				</ul>
				<a href="#" class="btn-custom" data-toggle="modal" data-target="#exampleModalCenter">S'inscrire maintenant</a>
			</div>
		</div>
	</nav>
	{{-- End Header Section --}}

    @yield('content')

	<footer class="ftco-footer">
		<div class="container mb-5 pb-4">
			<div class="row">
				<div class="col-md-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2 d-flex align-items-center">À propos</h2>
						<p>
							Africa Transport and Logistic Academy est un centre de formation
							spécialisé dans le transport, la logistique et la supply chain,
							orienté vers la pratique et l’employabilité.
						</p>
						<ul class="ftco-footer-social list-unstyled mt-4">
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
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Accueil</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>À propos</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Nos formations</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Galerie</a></li>
								<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="ftco-footer-widget">
						<h2 class="ftco-heading-2">Des questions ?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li>
									<span class="fa fa-map-marker mr-3"></span>
									<span class="text">112, Av. SONGOLOLO (au croisement de l’avenue Kasa-vubu) Commune de Kinshasa Ville Kinshasa-RDC</span>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-phone mr-3"></span>
										<span class="text">+243 820 643 533</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="fa fa-paper-plane mr-3"></span>
										<span class="text">contact@aficatl-group.com</span>
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
					<div class="col-md-6 aside-stretch py-3">
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

                <div class="modal-body p-4 p-md-5">
                    <form action="#" class="appointment-form ftco-animate">
                        <h3 class="mb-4 text-center">Inscription à une formation</h3>

                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Adresse email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Numéro de téléphone">
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select class="form-control">
                                            <option value="">Choisir une formation</option>
                                            <option>Transport & Logistique</option>
                                            <option>Gestion de la Supply Chain</option>
                                            <option>Transit & Douanes</option>
                                            <option>Logistique portuaire & maritime</option>
                                            <option>Management des opérations</option>
                                            <option>Santé, Sécurité & Environnement (HSE)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-group">
                                <textarea cols="30" rows="4" class="form-control" placeholder="Message (optionnel)"></textarea>
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" value="S'inscrire maintenant" class="btn btn-primary py-3 px-4">
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
