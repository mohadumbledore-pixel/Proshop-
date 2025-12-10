@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 700px;">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Modifier : {{ $product->name }}</h2>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">← Retour</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erreur !</strong> Veuillez corriger les champs suivants :
            <ul class="mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')

        <!-- Nom -->
        <div class="mb-3">
            <label class="form-label">Nom du produit</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <!-- Prix -->
        <div class="mb-3">
            <label class="form-label">Prix (€)</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <!-- Détails -->
        <div class="mb-3">
            <label class="form-label">Détails</label>
            <textarea name="details" class="form-control" rows="3">{{ $product->details }}</textarea>
        </div>

        <!-- Image actuelle -->
        <div class="mb-3">
            <label class="form-label d-block">Image actuelle</label>

            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}"
                     class="rounded mb-2"
                     width="180"
                     height="180"
                     style="object-fit: cover;">
            @else
                <p class="text-muted">Aucune image disponible</p>
            @endif
        </div>

        <!-- Nouvelle image -->
        <div class="mb-3">
            <label class="form-label">Changer l’image</label>
            <input type="file" name="image" class="form-control" onchange="previewNewImage(event)">
        </div>

        <!-- Preview -->
        <div class="mb-3">
            <img id="preview" src="#" style="display:none; max-width:200px; border-radius:8px;">
        </div>

        <button class="btn btn-primary px-4">Mettre à jour</button>
    </form>
</div>

<script>
function previewNewImage(event) {
    const output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
}
</script>

@endsection
