<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Vérifie que l'utilisateur est connecté
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Affiche la liste des produits
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    // Dashboard → afficher dernier produit + total
    public function dashboard()
    {
        $lastProduct = Product::latest()->first();
        $totalProducts = Product::count();

        return view('dashboard', compact('lastProduct', 'totalProducts'));
    }

    // Formulaire création produit
    public function create()
    {
        return view('products.create');
    }

    // Enregistrement produit
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'details' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Enregistrer l’image
        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'details' => $validated['details'] ?? null,
            'image' => $path,
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Produit créé avec succès.');
    }

    // Affiche un produit
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Formulaire édition produit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Mise à jour du produit
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',    
            'price' => 'required|numeric',
            'details' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Si nouvelle image → remplacer
        if ($request->hasFile('image')) {

            // Suppression ancienne image
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Sauvegarde nouvelle image
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('success', 'Produit mis à jour avec succès.');
    }

    // Suppression produit
    public function destroy(Product $product)
    {
        // Supprimer aussi l'image si elle existe
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produit supprimé avec succès.');
    }
}
