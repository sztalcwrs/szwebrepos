<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('frontend.products.products')
            ->with('page', 'allproducts')
            ->with('products', Product::all());
    }
}
