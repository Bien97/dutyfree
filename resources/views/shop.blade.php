@extends('layouts.app')

@section('title', 'Shop - Furni')

@section('content')

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">
                
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row" id="product-list">
            <!-- L'espace reservé à l'affichage des produits-->
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('product-list');

    const params = new URLSearchParams(window.location.search);
    const categoryId = params.get('category_id');

    loadProducts(categoryId);

    async function loadProducts(categoryId) {
        const url = categoryId
            ? `/api/v1/products?category_id=${encodeURIComponent(categoryId)}`
            : `/api/v1/products`;

        container.innerHTML = '<div class="col-12 text-center py-5">Chargement des produits...</div>';

        try {
            const res = await fetch(url, { headers: { 'Accept': 'application/json' } });
            const json = await res.json();

            if (!json.success) {
                throw new Error(json.message || 'Erreur lors de la récupération des produits.');
            }

            const products = json.data || [];

            if (!products.length) {
                container.innerHTML = '<div class="col-12 text-center py-5">Aucun produit trouvé pour cette catégorie.</div>';
                return;
            }

            container.innerHTML = products.map(p => renderProductCard(p)).join('');
        } catch (e) {
            container.innerHTML = `<div class="col-12 text-center text-danger py-5">Erreur: ${e.message}</div>`;
        }
    }

    function renderProductCard(p) {
        // Fallback image si non défini
        const defaultImage = '{{ asset('assets/images/product-3.png') }}';
        const imgSrc = (p.image_path && typeof p.image_path === 'string') ? p.image_path : defaultImage;

        return `
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="${imgSrc}" class="img-fluid product-thumbnail" alt="${escapeHtml(p.name || 'Produit')}">
                    <h3 class="product-title">${escapeHtml(p.name || '')}</h3>
                    <strong class="product-price">${formatPrice(p.price)}F CFA</strong>
                    <span class="icon-cross">
                        <img src="{{ asset('assets/images/cross.svg') }}" class="img-fluid" alt="Add to cart">
                    </span>
                </a>
            </div>
        `;
    }

    function formatPrice(value) {
        const num = Number(value);
        return isNaN(num) ? '0.00' : num.toFixed(2);
    }

    function escapeHtml(str) {
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }
});
</script>
@endpush