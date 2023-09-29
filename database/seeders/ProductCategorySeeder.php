<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'image_path' => 'CategoryImages/Electronic.jpg'],
            ['name' => 'Clothing', 'image_path' => 'CategoryImages/Clothing.jpg'],
            ['name' => 'Books', 'image_path' => 'CategoryImages/Books.jpg'],
            ['name' => 'Accessories', 'image_path' => 'CategoryImages/Accessories.jpg'],
            ['name' => 'healthcare', 'image_path' => 'CategoryImages/healthcare.jpg']
        ];
    
        foreach ($categories as $categoryData) {
            // Insert a new category using the data
            DB::table('product_categories')->insert($categoryData);
        }
    }
}
