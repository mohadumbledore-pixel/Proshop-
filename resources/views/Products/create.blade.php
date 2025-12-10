@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2>Ajouter un produit</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nom du produit</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prix (€)</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Détails</label>
            <textarea name="details" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Image du produit</label>
            <input type="file" name="image" class="form-control" required onchange="previewImage(event)">
        </div>

        <div class="mb-3">
            <img id="preview" src="#" style="display:none; max-width:200px; border-radius:8px;">
        </div>

        <button class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<script>
function previewImage(event) {
    const output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display = 'block';
}
</script>

@endsection
