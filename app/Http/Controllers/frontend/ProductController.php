<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('frontend.product.product')
            ->with('page', 'single product')
            ->with('product', $product);
    }
    public function show(Product $product)
    {
        return view('frontend.product.product')
            ->with('page', 'single product')
            ->with('product', $product);
    }

    // public function show($slug)
    // {

    //     $product = Product::where('slug', $slug)->first();

    //     return view('frontend.product.product')
    //         ->with('page', 'single product')
    //         ->with('product', $product);
    // }
}
