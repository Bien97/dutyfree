<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/dutyfree-logo-BRFPKRQG.png') }}" alt="DutyFree Express" height="100">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('shop') ? 'active' : '' }}"
                        href="{{ route('shop') }}">Boutique</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                        href="{{ route('services') }}">Services</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À
                        propos</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle {{ request()->routeIs('services') ? 'active' : '' }}"
                        href="#"
                        id="categoriesDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Catégories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('shop') }}?category_id={{ $category->id }}"
                                >
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                        href="{{ route('blog') }}">Blog</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">Contactez-nous</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                {{-- <li>
                    <a class="nav-link" href="#">
                        <img src="{{ asset('assets/images/user.svg') }}" alt="User">
                    </a>
                </li> --}}
                <li>
                    <a class="nav-link" href="{{ url('cart') }}">
                        <img src="{{ asset('assets/images/cart.svg') }}" alt="Cart">
                    </a>
                </li>
            </ul>

        </div>
    </div>

</nav>
<!-- End Header/Navigation -->

<style>
    /* Rendre le header transparent et fixe */
    .custom-navbar {
        position: fixed !important;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background: transparent !important;
        background-color: transparent !important;
        z-index: 1000;
        transition: all 0.3s ease;
        padding: 20px 0;
        opacity: 1;
    }

    /* Header disparaît au scroll */
    .custom-navbar.scrolled {
        transform: translateY(-100%);
        opacity: 0;
        pointer-events: none;
    }

    /* S'assurer que le body commence en haut */
    body {
        padding-top: 0 !important;
        margin-top: 0 !important;
    }

    /* Section hero en plein écran */
    .hero-section,
    section:first-of-type,
    .hero {
        min-height: 100vh !important;
        height: 100vh;
        padding-top: 0 !important;
        margin-top: 0 !important;
        display: flex;
        align-items: center;
        position: relative;
        background-size: cover !important;
        background-position: center !important;
    }

    /* Overlay sombre sur l'image */
    .hero-section::before,
    section:first-of-type::before,
    .hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    /* Contenu hero */
    .hero-content,
    .intro-excerpt {
        padding-top: 100px;
        position: relative;
        z-index: 2;
    }

    /* Container du hero au-dessus de l'overlay */
    .hero .container,
    .hero-section .container,
    section:first-of-type .container {
        position: relative;
        z-index: 2;
    }

    /* Logo ULTRA visible en BLANC PUR */
    .navbar-brand {
        color: #ffffff !important;
        font-weight: bold;
        font-size: 1.8rem !important;
        text-shadow:
            0 2px 8px rgba(0, 0, 0, 0.8),
            0 4px 16px rgba(0, 0, 0, 0.6),
            0 0 20px rgba(0, 0, 0, 0.4);
        letter-spacing: 0.5px;
    }

    .navbar-brand span {
        color: #f9bf29 !important;
    }

    /* MENU EN BLANC PUR - Accueil, Boutique, etc. */
    .custom-navbar-nav .nav-link {
        color: #ffffff !important;
        font-weight: 600 !important;
        font-size: 1.05rem !important;
        text-shadow:
            0 2px 6px rgba(0, 0, 0, 0.9),
            0 3px 12px rgba(0, 0, 0, 0.7),
            0 0 15px rgba(0, 0, 0, 0.5);
        padding: 8px 16px !important;
        transition: all 0.3s ease;
    }

    .custom-navbar-nav .nav-link:hover {
        color: #f9bf29 !important;
        text-shadow:
            0 2px 8px rgba(0, 0, 0, 1),
            0 4px 16px rgba(249, 191, 41, 0.5),
            0 0 20px rgba(249, 191, 41, 0.3);
        transform: translateY(-2px);
    }

    .custom-navbar-nav .nav-link.active {
        color: #f9bf29 !important;
        font-weight: 700 !important;
        text-shadow:
            0 2px 8px rgba(0, 0, 0, 1),
            0 4px 16px rgba(249, 191, 41, 0.6),
            0 0 25px rgba(249, 191, 41, 0.4);
    }

    /* Textes et paragraphes dans le hero en BLANC ÉCLATANT */
    .hero p,
    .hero-section p,
    section:first-of-type p,
    .intro-excerpt p,
    .hero h1,
    .hero h2,
    .hero h3,
    .hero-section h1,
    .hero-section h2,
    .hero-section h3,
    section:first-of-type h1,
    section:first-of-type h2,
    section:first-of-type h3 {
        color: #ffffff !important;
        text-shadow:
            0 2px 8px rgba(0, 0, 0, 0.9),
            0 4px 16px rgba(0, 0, 0, 0.7),
            0 0 20px rgba(0, 0, 0, 0.5);
        font-weight: 500;
    }

    .hero h1,
    .hero-section h1,
    section:first-of-type h1 {
        font-weight: 700 !important;
        font-size: 3rem !important;
    }

    /* Animation pour les textes au chargement */
    .hero h1,
    .hero-section h1,
    section:first-of-type h1 {
        animation: fadeInUp 1.8s ease-out;
    }

    .hero p,
    .hero-section p,
    section:first-of-type p,
    .intro-excerpt p {
        animation: fadeInUp 2s ease-out;
        animation-delay: 0.6s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .hero .btn,
    .hero-section .btn,
    section:first-of-type .btn {
        animation: fadeInUp 2s ease-out;
        animation-delay: 1.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    /* Définition de l'animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Icônes du panier ULTRA visibles */
    .custom-navbar-cta .nav-link {
        filter: drop-shadow(0 3px 8px rgba(0, 0, 0, 0.9)) drop-shadow(0 5px 15px rgba(0, 0, 0, 0.7));
        transition: all 0.3s ease;
    }

    .custom-navbar-cta img {
        filter: brightness(0) invert(1) drop-shadow(0 3px 8px rgba(0, 0, 0, 0.9)) drop-shadow(0 5px 15px rgba(0, 0, 0, 0.7));
        opacity: 1;
        width: 24px;
        height: 24px;
    }

    .custom-navbar-cta .nav-link:hover img {
        filter: brightness(0) invert(1) drop-shadow(0 4px 12px rgba(249, 191, 41, 0.8)) drop-shadow(0 6px 20px rgba(0, 0, 0, 0.9));
        transform: scale(1.1);
    }

    /* Bouton toggle pour mobile */
    .navbar-toggler {
        border: 2px solid rgba(255, 255, 255, 0.9) !important;
        padding: 8px 12px;
        background: rgba(0, 0, 0, 0.3);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.5);
    }

    .navbar-toggler:hover {
        background: rgba(0, 0, 0, 0.5);
        border-color: #f9bf29 !important;
    }

    .navbar-toggler-icon {
        filter: brightness(0) invert(1) drop-shadow(0 2px 6px rgba(0, 0, 0, 0.8));
    }

    /* Menu collapse sur mobile aussi visible */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: rgba(0, 0, 0, 0.85);
            padding: 20px;
            border-radius: 8px;
            margin-top: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
        }

        .custom-navbar-nav .nav-link {
            padding: 12px 20px !important;
        }
    }
</style>

<script>
    // Header disparaît quand on scroll vers le bas
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.custom-navbar');
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Si on scroll vers le bas et qu'on a dépassé 100px
        if (scrollTop > 100) {
            navbar.classList.add('scrolled');
        } else {
            // Si on remonte en haut
            navbar.classList.remove('scrolled');
        }

        lastScrollTop = scrollTop;
    });

    // Au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.custom-navbar');

        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        }
    });
</script>
