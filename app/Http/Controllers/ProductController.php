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
        $request->validate([
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'tax' => 'required|string|max:20',
            'discount' => 'required|string|max:20',
            'price' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:255',
        ]);

        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->quantity = $request->input('quantity');
        $product->tax = $request->input('tax');
        $product->discount = $request->input('discount');
        $product->price = $request->input('price');
        $product->status = $request->input('status');

        if ($request->hasFile('image')) {
            // Store the image in the 'public/products' folder and get the path
            $imagePath = $request->file('image')->store('public/products');
    
            // Remove 'public/' from the path to save in the database
            $imagePath = str_replace('public/', '', $imagePath);
    
            $product->image = $imagePath;
        }

        $product->description = $request->input('description');
        $product->save();
    

        return back()->with('success', 'Product information added successfully.');
    }
    public function product_information(){
        $products = Product::all();
        return view('product_information',['products' => $products]);
    }
}
