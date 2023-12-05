<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.product.index')
            ->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image', 
            'company' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $image_new_name = '';
        if ($request->has('image')) {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('backend/imgages/products/', $image_new_name);
        }
        

        Product::create([
            'title' => $request->title,
            'image' => $image_new_name,
            'category' => $request->category,
            'description' => $request->description,
            'company' => $request->company,
            'slug' => Str::slug($request->title),
        ]);

        Session::flash('success', 'Product created succesfully');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('frontend.product.product')
            ->with('page', 'single product')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'company' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);


        if ($request->has('image')) {
            unlink('backend/imgages/products/' . $product->image);
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('backend/imgages/products/', $image_new_name);
            $product->image = $image_new_name;
            $product->save();
        }

        $product->title = $request->title;
        $product->company = $request->company;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->slug = Str::slug($request->title);

        $product->save();

        Session::flash('success', 'Product updated succesfully');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        unlink('backend/imgages/products/' . $product->image);

        $product->forceDelete();

        Session::flash('success', 'Product deleted succesfully');

        return redirect()->back();
    }
}
