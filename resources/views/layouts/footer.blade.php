<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center">
                        <span class="me-1">
                            <img src="{{ asset('assets/images/envelope-outline.svg') }}" alt="Envelope" class="img-fluid">
                        </span>
                        <span>S'abonner à la newsletter</span>
                    </h3>

                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Entrez votre nom">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Entrez votre email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-3 col-md-6">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/dutyfree-logo-BRFPKRQG.png') }}" alt="DutyFree Express"
                        height="80">
                </a>
                <p class="mb-4">Précommandez vos produits Duty Free en ligne et récupérez-les à l'aéroport. Simple,
                    rapide et sans paiement en ligne.</p>
            </div>

            <div class="col-lg-9 col-md-6">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-4">
                        <h5 style="font-weight: 600 !important; margin-bottom: 1rem !important; color: #2f2f2f !important;">Navigation</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">À propos</a></li>
                            <li><a href="{{ route('shop') }}">Boutique</a></li>
                            <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-4">
                        <h5 style="font-weight: 600 !important; margin-bottom: 1rem !important; color: #2f2f2f !important;">Légal</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4">
                        <h5 style="font-weight: 600 !important; margin-bottom: 1rem !important; color: #2f2f2f !important;">Suivez-nous</h5>
                        <p style="margin-bottom: 0.5rem !important; color: #6c757d !important; font-size: 0.9rem !important;">Restez connecté avec DutyFree Express</p>
                        <ul class="list-unstyled custom-social" style="margin-top: 1rem !important;">
                            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        </ul>
                        <style>
                            .custom-social li a:hover span {
                                color: #ffffff !important;
                            }
                        </style>
                    </div>
                </div>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-12">
                    <p class="mb-2 text-center">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved.
                    </p>
                </div>

                {{-- <div class="col-12 text-center">
                    <ul class="list-unstyled d-inline-flex">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div> --}}

            </div>
        </div>

    </div>
</footer>
<!-- End Footer Section -->