@extends('layouts.app')

@section('title', 'Archipel - DUTYFREE')

@section('content')

    <style>
        .btn-explorer {
            background: #ADD8E6 !important;
            border: 2px solid #ADD8E6 !important;
            color: #003d7a !important;
            transition: 0.3s ease;
        }

        .btn-explorer:hover {
            background: transparent !important;
            color: #ADD8E6 !important;
        }
    </style>

    <!-- Start Hero Section -->
    <div class="hero"
        style="background: url('{{ asset('assets/images/pexels-tuurt-2954405.jpg') }}') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>DutyFree Express <span class="d-block">Réservez avant votre vol</span></h1>
                        <p class="mb-4">
                            Précommandez vos produits Duty Free en ligne et récupérez-les directement à l’aéroport.
                            Rapide, simple et sans paiement en ligne.
                        </p>

                        <p>
                            <a href="{{ route('shop') }}" class="btn btn-secondary me-2">Acheter maintenant</a>
                            {{-- <a href="#" class="btn btn-white-outline">Explorer</a> --}}
                        </p>

                    </div>
                </div>
                {{-- <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/images/couch.png') }}" class="img-fluid" alt="Couch">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Des produits de marques prestigieuses.</h2>
                    <p class="mb-4">
                        Découvrez une sélection exclusive de parfums, alcools, chocolats et accessoires.
                        Qualité authentique, prix Duty Free et retrait rapide à l’aéroport.
                    </p>
                    <p><a href="{{ route('shop') }}" class="btn btn-explorer">Explorer</a></p>
                </div>

                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('cart') }}">
                        <img src="{{ asset('assets/images/products/2053-removebg-preview_cropped.png') }}" class="img-fluid product-thumbnail"
                            alt="Product 1">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>
                        <span class="icon-cross">
                            <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid" alt="Cross">
                        </span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('cart') }}">
                        <img src="{{ asset('assets/images/products/front-view-black-fragrance-with-golden-cap-white-isolated-desk-removebg-preview_cropped.png') }}" class="img-fluid product-thumbnail"
                            alt="Product 2">
                        <h3 class="product-title">Kruzo Aero Chair</h3>
                        <strong class="product-price">$78.00</strong>
                        <span class="icon-cross">
                            <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid" alt="Cross">
                        </span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{ route('cart') }}">
                        <img src="{{ asset('assets/images/products/28815-removebg-preview_cropped.png') }}" class="img-fluid product-thumbnail"
                            alt="Product 3">
                        <h3 class="product-title">Ergonomic Chair</h3>
                        <strong class="product-price">$43.00</strong>
                        <span class="icon-cross">
                            <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid" alt="Cross">
                        </span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Pourquoi nous choisir ?</h2>
                    <p>Précommandez vos produits Duty Free en ligne et récupérez-les directement à l’aéroport.
                        Simple, rapide et sécurisé — aucun paiement en ligne requis.</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/truck.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Retrait rapide à l’aéroport</h3>
                                <p>Réservez vos produits en ligne et récupérez-les au comptoir sans attendre.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/bag.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Shopping simple & pratique</h3>
                                <p>Parcourez notre catalogue, ajoutez vos articles au panier et précommandez en quelques
                                    clics.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/support.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Assistance disponible</h3>
                                <p>Notre équipe est là pour répondre à vos questions sur les commandes et le retrait.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/return.svg') }}" alt="Image" class="img-fluid">
                                </div>
                                <h3>Flexibilité & tranquillité</h3>
                                <p>Vous pouvez modifier ou annuler vos commandes avant le retrait, facilement et rapidement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/images/pexels-magda-ehlers-pexels-2861656_1_cropped.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1">
                            <img src="{{ asset('assets/images/bellboy-tipped-by-company-executives_cropped.jpg') }}" alt="Untree.co" class="img-fluid">
                        </div>
                        <div class="grid grid-2">
                            <img src="{{ asset('assets/images/10945220_cropped.jpg') }}" alt="Untree.co" class="img-fluid">
                        </div>
                        <div class="grid grid-3">
                            <img src="{{ asset('assets/images/pexels-karola-g-5239881_cropped.jpg') }}" alt="Untree.co" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">Précommandez vos produits Duty Free facilement</h2>
                    <p>
                        Parcourez notre catalogue de parfums, alcools, chocolats et accessoires, sélectionnés pour
                        les voyageurs. Réservez vos articles en ligne et récupérez-les rapidement à l’aéroport,
                        sans paiement en ligne.
                    </p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Précommande simple et rapide en quelques clics</li>
                        <li>Retrait direct au comptoir à l’aéroport</li>
                        <li>Sélection des meilleures marques Duty Free</li>
                        <li>Flexibilité et modifications possibles avant le retrait</li>
                    </ul>
                    <p><a href="{{ route('shop') }}" class="btn btn-explorer">Explorer le catalogue</a></p>
                </div>

            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    {{-- <div class="popular-product">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/product-1.png') }}" alt="Parfum" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Parfum Oriental</h3>
                            <p>Un parfum élégant et sophistiqué, idéal pour voyager léger et sentir bon à l’arrivée.</p>
                            <p><a href="#">Voir le produit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/product-2.png') }}" alt="Chocolat" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Chocolat Gourmet</h3>
                            <p>Délices chocolatés à prix Duty Free, parfaits pour offrir ou savourer avant le vol.</p>
                            <p><a href="#">Voir le produit</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/product-3.png') }}" alt="Alcool" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Whisky Édition Limitée</h3>
                            <p>Whisky premium à prix Duty Free, à retirer facilement au comptoir de l’aéroport.</p>
                            <p><a href="#">Voir le produit</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div> --}}
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Ce que disent nos clients</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;J’ai réservé mes parfums en ligne et tout était prêt à mon arrivée
                                                    à l’aéroport.
                                                    Service rapide, efficace et sans tracas. Je recommande vivement !&rdquo;
                                                </p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('assets/images/person-1.png') }}"
                                                        alt="Sophie Martin" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Sophie Martin</h3>
                                                <span class="position d-block mb-3">Voyageuse fréquente</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Le retrait à l’aéroport a été un jeu d’enfant. J’ai économisé du
                                                    temps et j’ai eu mes chocolats préférés. Très pratique !&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('assets/images/person-1.png') }}"
                                                        alt="Jean Dupont" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Jean Dupont</h3>
                                                <span class="position d-block mb-3">Voyageur d’affaires</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Service impeccable ! La précommande en ligne est super simple et
                                                    le personnel à l’aéroport était très accueillant. Je le referai à chaque
                                                    voyage.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('assets/images/person-1.png') }}"
                                                        alt="Emma Lefevre" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Emma Lefevre</h3>
                                                <span class="position d-block mb-3">Voyageuse régulière</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    {{-- <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('assets/images/post-1.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">First Time Home Owner Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('assets/images/post-2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('assets/images/post-3.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12,
                                        2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- End Blog Section -->

@endsection
