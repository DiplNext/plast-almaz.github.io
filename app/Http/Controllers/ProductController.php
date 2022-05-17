<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(Category $category, Product $product)
  {
    $relatedProducts = Product::where('id', '!=', $product->id)
      ->where('category_id', $category->id)
      ->limit(6)
      ->get();
    return view('pages.product', compact('category', 'product', 'relatedProducts'));
  }
}
