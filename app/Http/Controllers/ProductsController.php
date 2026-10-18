<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

   public function index()
    {

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

      public function store(StoreProductsRequest $request){
        $product = Product::query()->create($request->validated());
        return redirect()->route('products.index');
    }
}
