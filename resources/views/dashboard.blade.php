@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <!-- Hero section -->
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Bienvenue sur <span class="text-primary">ProShop</span> </h1>
            <p class="col-md-8 fs-5 mt-3">
                Vous êtes maintenant connecté à votre espace. ProShop vous permet de gérer facilement vos produits,
                suivre vos stocks, et optimiser votre boutique en toute simplicité.
            </p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">
                Accéder à vos produits
            </a>
        </div>
    </div>

    <!-- Section Statistiques -->
    <div class="row mt-4">

        <!-- Total produits -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Nombre total de produits</h5>
                    <p class="display-6 fw-bold text-primary">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>

        <!-- Dernier produit ajouté -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Dernier produit ajouté</h5>

                    @if ($lastProduct)
                        <div class="d-flex align-items-center">
                            @if($lastProduct->image)
                                <img src="{{ asset('storage/' . $lastProduct->image) }}" 
                                     alt="Image produit"
                                     class="me-3 rounded" 
                                     width="80">
                            @endif

                            <div>
                                <h6 class="mb-1">{{ $lastProduct->name }}</h6>
                                <p class="text-muted mb-1">Prix : {{ $lastProduct->price }} FCFA</p>
                                <small class="text-secondary">Ajouté le {{ $lastProduct->created_at->format('d/m/Y') }}</small>
                            </div>
                        </div>
                    @else
                        <p class="text-muted">Aucun produit ajouté pour le moment.</p>
                    @endif
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
