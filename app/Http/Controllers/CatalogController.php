<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('pages.catalog', compact('products'));
  }

  public function category(Category $category)
  {
    $products = Product::where('category_id', $category->id)->paginate(12);
    return view('pages.catalog', compact('category', 'products'));
  }
}
