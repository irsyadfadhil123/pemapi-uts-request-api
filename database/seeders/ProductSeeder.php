<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'title' => 'Tumbler',
                'price' => 10000,
                'category' => 'Needs',
                'description' => 'Great tumbler',
                'image' => 'https://images.unsplash.com/photo-1679310289576-8e1b68b808ba',
            ],
            [
                'title' => 'Basketball',
                'price' => 50000,
                'category' => 'Sports',
                'description' => 'Nice basketball',
                'image' => 'https://images.unsplash.com/photo-1519861531473-9200262188bf',
            ],
            [
                'title' => 'Potato',
                'price' => 5000,
                'category' => 'Groceries',
                'description' => 'Delicious Potato',
                'image' => 'https://plus.unsplash.com/premium_photo-1724256031338-b5bfba816cfd',
            ],
            [
                'title' => 'Carrot',
                'price' => 5000,
                'category' => 'Groceries',
                'description' => 'Orange Carrot',
                'image' => 'https://plus.unsplash.com/premium_photo-1669652909008-d504f70b8129',
            ],
        ]);
    }
}
