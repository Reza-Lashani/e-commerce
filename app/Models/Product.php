<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        // Define the category relationship (belongs to)
        public function category()
        {
            return $this->belongsTo(ProductCategory::class, 'category_id');
        }
        
        // Define the orders relationship (many-to-many)
        public function orders()
        {
            return $this->belongsToMany(Order::class, 'order_product')
                ->withPivot('quantity'); // If you want to retrieve quantity along with orders
        }
}
