@extends('layouts.app')

@section('title', 'Checkout - Furni')

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
        style="background: url('{{ asset('assets/images/showing-cart-trolley-shopping-online-sign-graphic.jpg') }}') no-repeat center center !important; 
    background-size: cover !important; 
    padding: 120px 0 !important;
    min-height: 550px !important;
    height: 550px !important;
    max-height: 550px !important;">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Validation</h1>
                    </div>
                </div>

                <div class="col-lg-7"></div>
            </div>
        </div>
    </div>

    <!-- End Hero Section -->


    <div class="untree_co-section">
        <div class="container">

            {{-- <div class="row mb-5">
            <div class="col-md-12">
                <div class="border p-4 rounded" role="alert">
                    Returning customer? <a href="#">Click here</a> to login
                </div>
            </div>
        </div> --}}

            <div class="row">

                <!-- Left : Billing Details -->
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Détails de facture</h2>
                    <div class="p-3 p-lg-5 border bg-white">

                        <div class="form-group">
                            <label for="c_country" class="text-black">Pays <span class="text-danger">*</span></label>
                            <select id="c_country" class="form-control">
                                <option value="1">Sélectionnez un pays</option>
                                <option value="2">Bangladesh</option>
                                <option value="3">Algeria</option>
                                <option value="4">Afghanistan</option>
                                <option value="5">Ghana</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black" for="c_fname">Prénom </label>
                                <input type="text" class="form-control" id="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="c_lname">Nom </label>
                                <input type="text" class="form-control" id="c_lname">
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                        <div class="col-md-12">
                            <label class="text-black" for="c_companyname">Company Name</label>
                            <input type="text" class="form-control" id="c_companyname">
                        </div>
                    </div> --}}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-black" for="c_address">Addresse </label>
                                <input type="text" class="form-control" id="c_address" placeholder="">
                            </div>
                        </div>

                        {{-- <div class="form-group mt-3">
                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div> --}}

                        {{-- <div class="form-group row">
                        <div class="col-md-6">
                            <label class="text-black" for="c_state_country">State / Country *</label>
                            <input type="text" class="form-control" id="c_state_country">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="c_postal_zip">Postal / Zip *</label>
                            <input type="text" class="form-control" id="c_postal_zip">
                        </div>
                    </div> --}}

                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label class="text-black" for="c_email_address">Adresse e-mail </label>
                                <input type="email" class="form-control" id="c_email_address">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="c_phone">Téléphone </label>
                                <input type="text" class="form-control" id="c_phone">
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-black d-flex align-items-center">
                                <input type="checkbox" id="livraison_domicile" class="mr-2">
                                Se faire livrer à domicile ?
                            </label>
                        </div>

                        <!-- Section qui apparaît si on coche -->
                        <div id="bloc_livraison" class="p-3 border bg-light mt-3" style="display: none;">
                            <h5 class="text-black mb-3">Informations de livraison</h5>

                            <div class="form-group">
                                <label class="text-black" for="adresse_livraison">Ville</label>
                                <input type="text" class="form-control" id="adresse_livraison" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="text-black" for="ville_livraison">Quartier</label>
                                <input type="text" class="form-control" id="ville_livraison">
                            </div>

                            {{-- <div class="form-group">
                                <label class="text-black" for="code_postal">Code postal</label>
                                <input type="text" class="form-control" id="code_postal">
                            </div> --}}
                        </div>


                    </div>
                </div>

                <!-- Right : Order Summary -->
                <div class="col-md-6">

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Votre commande</h2>
                            <div class="p-3 p-lg-5 border bg-white">

                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Produit(s)</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Top Up T-Shirt × 1</td>
                                            <td>$250.00</td>
                                        </tr>
                                        <tr>
                                            <td>Polo Shirt × 1</td>
                                            <td>$100.00</td>
                                        </tr>
                                        {{-- <tr>
                                        <td class="text-black font-weight-bold">Sous-total du panier</td>
                                        <td>$350.00</td>
                                    </tr> --}}
                                        <tr>
                                            <td class="text-black font-weight-bold">Montant total de la commande</td>
                                            <td class="text-black font-weight-bold">$350.00</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Place order button -->
                                <button class="btn btn-explorer" onclick="window.location=''">
                                    Valider la commande
                                </button>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script>
        document.getElementById("livraison_domicile").addEventListener("change", function() {
            document.getElementById("bloc_livraison").style.display = this.checked ? "block" : "none";
        });
    </script>

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

{{-- <script>
    
    document.getElementById("livraison_domicile").addEventListener("change", function () {
        document.getElementById("bloc_livraison").style.display = this.checked ? "block" : "none";
    });
</script> --}}
