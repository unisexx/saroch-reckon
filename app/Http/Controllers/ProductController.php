<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

use App;

class ProductController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::with('translations')->orderBy('order', 'asc')->get();
        return view('product', compact('product_categories'));
    }

    public function category($id)
    {
        $product_category = ProductCategory::findOrFail($id)->translate(App::getLocale());
        $products = Product::with('translations')->where('product_category_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        return view('product-category', compact('product_category', 'products'));
    }
}
