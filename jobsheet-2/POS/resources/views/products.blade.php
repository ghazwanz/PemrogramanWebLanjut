<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - {{ ucwords(str_replace('-', ' ', $category)) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #2196F3;
            padding-bottom: 10px;
        }
        .breadcrumb {
            margin-bottom: 20px;
            color: #666;
        }
        .breadcrumb a {
            color: #2196F3;
            text-decoration: none;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .product-card h3 {
            color: #333;
            margin: 10px 0;
        }
        .product-card .price {
            color: #4CAF50;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <a href="/">Home</a> / <a href="/category/{{ $category }}">{{ ucwords(str_replace('-', ' ', $category)) }}</a>
        </div>

        <h1>Daftar Produk: {{ ucwords(str_replace('-', ' ', $category)) }}</h1>

        <div class="products">
            @php
                $products = [
                    'food-beverage' => [
                        ['name' => 'Kopi Arabica', 'price' => 'Rp 50.000'],
                        ['name' => 'Teh Hijau', 'price' => 'Rp 25.000'],
                        ['name' => 'Snack Premium', 'price' => 'Rp 15.000'],
                        ['name' => 'Jus Buah', 'price' => 'Rp 20.000'],
                    ],
                    'beauty-health' => [
                        ['name' => 'Facial Wash', 'price' => 'Rp 45.000'],
                        ['name' => 'Vitamin C', 'price' => 'Rp 150.000'],
                        ['name' => 'Body Lotion', 'price' => 'Rp 60.000'],
                        ['name' => 'Sunscreen', 'price' => 'Rp 85.000'],
                    ],
                    'home-care' => [
                        ['name' => 'Detergen', 'price' => 'Rp 35.000'],
                        ['name' => 'Pewangi Ruangan', 'price' => 'Rp 40.000'],
                        ['name' => 'Pembersih Lantai', 'price' => 'Rp 30.000'],
                        ['name' => 'Tissue', 'price' => 'Rp 20.000'],
                    ],
                    'baby-kid' => [
                        ['name' => 'Popok Bayi', 'price' => 'Rp 120.000'],
                        ['name' => 'Susu Formula', 'price' => 'Rp 180.000'],
                        ['name' => 'Baby Oil', 'price' => 'Rp 45.000'],
                        ['name' => 'Mainan Edukasi', 'price' => 'Rp 95.000'],
                    ],
                ];

                $categoryProducts = $products[$category] ?? [];
            @endphp

            @forelse($categoryProducts as $product)
                <div class="product-card">
                    <h3>{{ $product['name'] }}</h3>
                    <p class="price">{{ $product['price'] }}</p>
                </div>
            @empty
                <p>Tidak ada produk dalam kategori ini.</p>
            @endforelse
        </div>

        <div style="margin-top: 30px;">
            <a href="/" style="color: #2196F3; text-decoration: none;">← Kembali ke Home</a>
        </div>
    </div>
</body>
</html>
