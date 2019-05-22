<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
       $products = Product::with(['category','tags'])->get();
//       dd($products);
       return view('index', compact('products'));
   }
}
