<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        return Product::with('kategori:id,name')->get();
    }

    public function show(Product $product) {
        $product->load('kategori:id,name');

        return $product;
    }
}
