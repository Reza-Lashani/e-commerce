<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

        // Define the user relationship (belongs to)
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        // Define the products relationship (many-to-many)
        public function products()
        {
            return $this->belongsToMany(Product::class, 'order_product')
                ->withPivot('quantity'); 
        }
}
