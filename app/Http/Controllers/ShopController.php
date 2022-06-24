<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('pages.product-list', ['categories' => $categories]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.product', ['product' => $product]);
    }
}
