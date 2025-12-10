@extends('layouts.app')
@section('content')
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Supprimer le produit</h4>
        </div>

        <div class="card-body">

            <div class="alert alert-warning">
                <strong>Attention :</strong> Vous êtes sur le point de supprimer le produit <strong>{{ $product->name }}</strong>. Cette action est irréversible.
            </div>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="mt-4 text-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection