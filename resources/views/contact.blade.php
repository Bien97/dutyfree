@extends('layouts.app')

@section('title', 'Contact Us - Furni')

@section('content')

    <style>
        .btn-explorer {
            background: #ADD8E6 !important;
            border: 2px solid #ADD8E6 !important;
            color: #003d7a !important;
            transition: all 0.3s ease;
            /* transition plus rapide et discrète */
        }

        /* Effet hover plus subtil */
        .btn-explorer:hover {
            background: #003d7a !important;
            /* fond sombre pour contraste */
            color: #fff !important;
            /* texte blanc */
            transform: scale(1.05);
            /* léger agrandissement */
            box-shadow: 0 4px 10px rgba(0, 61, 122, 0.3);
            /* ombre plus douce */
        }
    </style>

    <!-- Start Hero Section -->
    <div class="hero"
        style="background: url('{{ asset('assets/images/customer-service-business-contact-concept-wooden-cube-block-which-print-screen-letter-telephone-email-address-message.jpg') }}') no-repeat center center !important; 
    background-size: cover !important; 
    padding: 120px 0 !important;
    min-height: 550px !important;
    height: 550px !important;
    max-height: 550px !important;">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Contact</h1>
                        <p class="mb-4" style="font-size: 1.1rem; line-height: 1.1;">
                            Besoin d’aide ? Notre équipe est disponible pour répondre à vos questions sur les
                            précommandes et le retrait à l’aéroport.
                        </p>

                        <p>
                            {{-- <a href="{{ route('shop') }}" class="btn btn-secondary me-2">Acheter maintenant</a> --}}
                            {{-- <a href="#" class="btn btn-white-outline"></a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Hero Section -->

    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-8 pb-4">

                        <div class="row mb-5">
                            <div class="col-lg-4">
                                <a href="https://www.google.com/maps/search/?api=1&query=Lomé+Togo" target="_blank"
                                    class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </div>
                                    <div class="service-contents">
                                        <p>Lomé, Togo</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4">
                                <a href="mailto:contact@dutyfree.com"
                                    class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                                        </svg>
                                    </div>
                                    <div class="service-contents">
                                        <p>contact@dutyfree.com</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active"
                                    data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </div>
                                    <div class="service-contents">
                                        <p>
                                            <a href="https://wa.me/22890862570" target="_blank">+228 90 86 25 70</a> /
                                            <a href="https://wa.me/22899476525" target="_blank">+228 99 47 65 25</a>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">Prénom</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Nom</label>
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group mb-5">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn btn-explorer">Envoyer un message</button>
                        </form>

                    </div>


                </div>

            </div>

        </div>
    </div>
    <!-- End Contact Form -->

    <style>
        /* Définir la police de tout le site */
        body {
            font-family: 'Poppins', sans-serif;
            /* ou une autre police */
        }

        /* Si tu veux juste une section précise */
        .hero,
        .product-section,
        .footer-section {
            font-family: 'Poppins', sans-serif;
        }
    </style>

@endsection
