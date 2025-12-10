@extends('layouts.app')

@section('content')
<h2>{{ $product->name }}</h2>

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}"
                     class="img-fluid rounded-start"
                     alt="Image de {{ $product->name }}">
            @else
                <div class="d-flex align-items-center justify-content-center bg-light" 
                     style="width:100%; height:100%; min-height:150px;">
                    <span class="text-muted">Aucune image disponible</span>
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->details }}</p>
                <p class="card-text"><strong>{{ $product->price }} FCFA</strong></p>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection