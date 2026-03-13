<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);

        return view('products.index', compact('products'));
    }
}