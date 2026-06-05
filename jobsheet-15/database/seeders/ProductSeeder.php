<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laravel Starter Kit',
                'sku' => 'LRV-STARTER',
                'description' => 'Paket starter project Laravel untuk praktikum.',
                'price' => 150000,
                'stock' => 20,
                'image' => null,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Filament Admin Template',
                'sku' => 'FLM-ADMIN',
                'description' => 'Template admin panel berbasis Filament.',
                'price' => 250000,
                'stock' => 12,
                'image' => null,
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Database Migration Pack',
                'sku' => 'DB-MIGRATION',
                'description' => 'Contoh struktur migration untuk pembelajaran Laravel.',
                'price' => 100000,
                'stock' => 8,
                'image' => null,
                'is_active' => true,
                'is_featured' => false,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['sku' => $product['sku']],
                $product,
            );
        }
    }
}
