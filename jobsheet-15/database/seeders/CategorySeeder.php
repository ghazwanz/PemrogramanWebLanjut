<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'Filament', 'slug' => 'filament'],
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'Database', 'slug' => 'database'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category,
            );
        }
    }
}
