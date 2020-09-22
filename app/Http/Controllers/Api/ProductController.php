<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
       // $products = Product::with('category')->get();
        $products = Product::with('category')->paginate(10);
        return ProductResource::collection($products);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $prodcut)
    {
        //
    }


    public function edit(Product $prodcut)
    {
        //
    }


    public function update(Request $request, Product $prodcut)
    {
        //
    }

    public function destroy(Product $prodcut)
    {
        //
    }
}
