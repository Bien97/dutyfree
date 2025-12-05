<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">

        {{-- <div class="sofa-img">
            <img src="{{ asset('assets/images/sofa.jpg') }}" alt="Image" class="img-fluid">
        </div> --}}

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
            <div class="col-lg-4">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/dutyfree-logo-BRFPKRQG.png') }}" alt="DutyFree Express"
                        height="100">
                </a>
                <p class="mb-4">Précommandez vos produits Duty Free en ligne et récupérez-les à l’aéroport. Simple,
                    rapide et sans paiement en ligne.</p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('about') }}">À propos</a></li>
                            <li><a href="{{ route('shop') }}">Boutique</a></li>
                            {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
                            <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Knowledge base</a></li>
                            <li><a href="#">Live chat</a></li>
                        </ul>
                    </div>

                    {{-- <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Our team</a></li>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Nordic Chair</a></li>
                            <li><a href="#">Kruzo Aero</a></li>
                            <li><a href="#">Ergonomic Chair</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>

        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved.
                        {{-- &mdash; Designed with love by <a
                            href="https://untree.co">Untree.co</a> Distributed By <a
                            href="https://themewagon.com">ThemeWagon</a> --}}
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</footer>
<!-- End Footer Section -->
