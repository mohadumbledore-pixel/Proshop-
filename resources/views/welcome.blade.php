@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <!-- Hero section -->
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Bienvenue sur <span class="text-primary">ProShop</span> 👋</h1>
            <p class="col-md-8 fs-5 mt-3">
                Vous êtes maintenant connecté à votre espace. ProShop vous permet de gérer facilement vos produits,
                suivre vos stocks, et optimiser votre boutique en toute simplicité.
            </p>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">
                Accéder à vos produits
            </a>
        </div>
    </div>

    <!-- Additional info cards -->
    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">📦 Gestion des produits</h5>
                    <p class="card-text">
                        Ajoutez, modifiez ou supprimez vos produits en quelques clics. Une interface simple et intuitive.
                    </p>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">
                        Voir les produits
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">📊 Statistiques</h5>
                    <p class="card-text">
                        Analysez vos ventes, suivez vos stocks et visualisez les performances de votre boutique.
                    </p>
                    <button class="btn btn-outline-secondary" disabled>
                        Bientôt disponible
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">⚙️ Paramètres</h5>
                    <p class="card-text">
                        Mettez à jour vos informations, gérez votre profil et configurez votre espace personnel.
                    </p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-dark">
                        Gérer mon profil
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
