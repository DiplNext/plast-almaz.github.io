<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    return view('pages.home', [
      'products' => Product::limit(5)->get()
    ]);
  }
}
