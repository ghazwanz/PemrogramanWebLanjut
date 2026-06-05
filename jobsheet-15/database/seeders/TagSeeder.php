<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Tutorial', 'slug' => 'tutorial'],
            ['name' => 'Praktikum', 'slug' => 'praktikum'],
            ['name' => 'Backend', 'slug' => 'backend'],
            ['name' => 'Admin Panel', 'slug' => 'admin-panel'],
            ['name' => 'Relasi', 'slug' => 'relasi'],
        ];

        foreach ($tags as $tag) {
            Tag::updateOrCreate(
                ['slug' => $tag['slug']],
                $tag,
            );
        }
    }
}
