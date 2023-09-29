<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Galaxy S22',
                'description' => 'Samsung Galaxy phone', 
                'price' => 699.99,
                'image_path' => 'ProductImages/galaxy S22.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Men Nike Shoes',
                'description' => 'Nike shoes for men, size 44',
                'price' => 69.99,
                'image_path' => 'ProductImages/Nike Shoe Men.jpg',
                'category_id' => 2
            ],
            [
                'name' => 'Hydrosel Cream',
                'description' => 'The HydroselCream for dry skins',
                'price' => 10.00,
                'image_path' => 'ProductImages/Hydrosel cream.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'JavaScript book',
                'description' => 'JavaScript book for beginners',
                'price' => 48.50,
                'image_path' => 'ProductImages/JavaScript Book Cover.jpg',
                'category_id' => 3
            ],
            [
                'name' => 'Women\'s dress',
                'description' => 'Women\'s dress, various sizes',
                'price' => 39.99,
                'image_path' => 'ProductImages/Womens Dress.jpg',
                'category_id' => 4
            ]
        ];

        foreach($products as $productData) {
            Product::create($productData);
        }
    }
}
