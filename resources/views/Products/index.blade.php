@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Liste des produits</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            + Ajouter un produit
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">

                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             class="card-img-top"
                             style="height: 200px; object-fit: cover;">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                        <p class="text-muted">Prix : <strong>{{ $product->price }} €</strong></p>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">Voir</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-warning">Modifier</a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  onsubmit="return confirm('Supprimer ce produit ?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>

</div>
@endsection
