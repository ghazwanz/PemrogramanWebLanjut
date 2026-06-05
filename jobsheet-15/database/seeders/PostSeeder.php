<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Implementasi Resource Filament',
                'slug' => 'implementasi-resource-filament',
                'category_slug' => 'filament',
                'tag_slugs' => ['tutorial', 'admin-panel', 'praktikum'],
                'color' => '#0f766e',
                'body' => 'Post ini membahas pembuatan resource Filament untuk kebutuhan admin panel.',
                'published' => true,
                'published_at' => now()->subDays(5)->toDateString(),
            ],
            [
                'title' => 'Relasi Many to Many Laravel',
                'slug' => 'relasi-many-to-many-laravel',
                'category_slug' => 'laravel',
                'tag_slugs' => ['backend', 'relasi', 'praktikum'],
                'color' => '#2563eb',
                'body' => 'Post ini membahas relasi belongsToMany dan tabel pivot pada Laravel.',
                'published' => true,
                'published_at' => now()->subDays(3)->toDateString(),
            ],
            [
                'title' => 'Pengelolaan Data Pivot',
                'slug' => 'pengelolaan-data-pivot',
                'category_slug' => 'database',
                'tag_slugs' => ['relasi', 'backend'],
                'color' => '#7c3aed',
                'body' => 'Post ini berisi contoh pengelolaan data pivot menggunakan Filament.',
                'published' => false,
                'published_at' => null,
            ],
        ];

        foreach ($posts as $postData) {
            $category = Category::where('slug', $postData['category_slug'])->firstOrFail();

            $post = Post::updateOrCreate(
                ['slug' => $postData['slug']],
                [
                    'title' => $postData['title'],
                    'category_id' => $category->id,
                    'color' => $postData['color'],
                    'image' => null,
                    'body' => $postData['body'],
                    'published' => $postData['published'],
                    'published_at' => $postData['published_at'],
                ],
            );

            $tagIds = Tag::whereIn('slug', $postData['tag_slugs'])->pluck('id');

            $post->tags()->sync($tagIds);
        }
    }
}
