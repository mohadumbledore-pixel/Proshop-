<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // C'est cette ligne qui corrige l'erreur !

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Casque Audio',
                'price' => 59.99,
                'details' => 'Casque Bluetooth avec réduction de bruit',
                'image' => 'https://images.unsplash.com/photo-1580894908361-9b4e6d5aef30?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'name' => 'Montre Connectée',
                'price' => 129.99,
                'details' => 'Montre intelligente avec suivi de santé',
                'image' => 'https://images.unsplash.com/photo-1603791440384-56cd371ee9a7?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'name' => 'Sac à Dos',
                'price' => 79.99,
                'details' => 'Sac à dos imperméable pour ordinateur portable',
                'image' => 'https://images.unsplash.com/photo-1600180758893-4b3a0a3d9d4b?auto=format&fit=crop&w=400&q=80',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}