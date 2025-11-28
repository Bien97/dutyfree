@extends('layouts.app')

@section('title', 'Page Boutique')

@section('content')

<!-- Start Hero Section -->

    <div class="container mt-5">
        <div class="row justify-content-between align-items-center">
           
            <div class="col-lg-12 text-center text-lg-start">
                <div class="row g-3 mt-3 mt-lg-0 justify-content-between align-items-center">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="search-input" placeholder="Rechercher un produit...">
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" id="category-select">
                            <option value="">Toutes les catégories</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex">
                        <button class="btn btn-primary w-100" id="reset-filters">Réinitialiser</button>
                    </div>
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
    const searchInput = document.getElementById('search-input');
    const categorySelect = document.getElementById('category-select');
    const resetBtn = document.getElementById('reset-filters');

    const params = new URLSearchParams(window.location.search);
    const categoryId = params.get('category_id');
    const initialQuery = params.get('input') || '';

    if (initialQuery) {
        searchInput.value = initialQuery;
    }

    loadCategories(categoryId);
    loadProducts(categoryId, initialQuery);

    let debounceTimer;
    searchInput.addEventListener('input', () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            const q = searchInput.value.trim();
            const cat = categorySelect.value || '';
            updateQueryParams(q, cat);
            loadProducts(cat || null, q);
        }, 300);
    });

    categorySelect.addEventListener('change', () => {
        const q = searchInput.value.trim();
        const cat = categorySelect.value || '';
        updateQueryParams(q, cat);
        loadProducts(cat || null, q);
    });

    resetBtn.addEventListener('click', () => {
        searchInput.value = '';
        categorySelect.value = '';
        updateQueryParams('', '');
        loadProducts(null, '');
    });

    async function loadProducts(categoryId, query) {
        const useSearch = (query && query.length > 0) || (categoryId && categoryId.length > 0);
        const url = useSearch
            ? `/api/v1/search${buildQuery({ input: query || '', category_id: categoryId || '' })}`
            : `/api/v1/products`;

        container.innerHTML = '<div class="col-12 text-center py-5">Chargement des produits...</div>';

        try {
            const res = await fetch(url, { headers: { 'Accept': 'application/json' } });
            const json = await res.json();

            if (!json.success) {
                throw new Error(json.message || 'Erreur lors de la récupération des produits.');
            }

            let products = json.data || [];

            products = products.filter(p => Number(p.stock) > 0);

            if (!products.length) {
                container.innerHTML = '<div class="col-12 text-center py-5">Aucun produit trouvé pour cette catégorie.</div>';
                return;
            }

            container.innerHTML = products.map(p => renderProductCard(p)).join('');
        } catch (e) {
            container.innerHTML = `<div class="col-12 text-center text-danger py-5">Erreur: ${e.message}</div>`;
        }
    }

    async function loadCategories(selectedId) {
        try {
            const res = await fetch('/api/v1/categories', { headers: { 'Accept': 'application/json' } });
            const json = await res.json();
            if (!json.success) return;
            const cats = json.data || [];
            const options = ['<option value="">Toutes les catégories</option>']
                .concat(cats.map(c => `<option value="${c.id}">${escapeHtml(c.name || '')}</option>`));
            categorySelect.innerHTML = options.join('');
            if (selectedId) {
                categorySelect.value = String(selectedId);
            }
        } catch {}
    }

    function buildQuery(obj) {
        const params = new URLSearchParams();
        Object.entries(obj).forEach(([k, v]) => {
            if (v) params.append(k, v);
        });
        const qs = params.toString();
        return qs ? `?${qs}` : '';
    }

    function updateQueryParams(input, categoryId) {
        const params = new URLSearchParams();
        if (input) params.set('input', input);
        if (categoryId) params.set('category_id', categoryId);
        const qs = params.toString();
        const newUrl = `${window.location.pathname}${qs ? `?${qs}` : ''}`;
        window.history.replaceState({}, '', newUrl);
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
