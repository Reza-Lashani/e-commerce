<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index($categoryId)
    {
        // Retrieve the Category model based on the provided ID
        $category = ProductCategory::findOrFail($categoryId);
        
        // Retrieve products related to the category
        $products = $category->products;
        
        return view('categories.index', compact('category', 'products'));
    }
}
