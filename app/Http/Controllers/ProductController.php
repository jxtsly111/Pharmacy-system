<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product(){
        return view('product');
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'tax' => 'required|string|max:20',
            'discount' => 'required|string|max:20',
            'price' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $product = new Product($data);
        $product->save();

        return back()->with('success', 'Product information added successfully.');
    }
}
