<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::orderBy('order', 'asc')->get();
        return view('product', compact('product_categories'));
    }

    public function category($id)
    {
        $product_category = ProductCategory::findOrFail($id);
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(5);
        return view('product-category', compact('product_category', 'products'));
    }
}
