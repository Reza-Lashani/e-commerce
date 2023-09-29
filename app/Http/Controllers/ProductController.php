<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function show($id)
    {
        $product = Product::find($id); 

        if (!$product) {
            abort(404); 
        }

        return view('products\show', compact('product'));
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $results = Product::where('name', 'like', "%$query%")->get();

        return view('products.search', ['results' => $results, 'query' => $query]);
    }

}
