<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name')->get();

    return view('products', [
        'products' => $products,
    ]);

    }

    //get products by name
    public function search(Request $request){
        $search = $request->input('search');
        $products = Product::where('name', 'like', "%$search%")->get();

        return view('products', [
            'products' => $products,
        ]);
    }

    //get products by price
    public function price(Request $request){
        $price = $request->input('price');
        $products = Product::where('price', 'like', "%$price%")->get();

        return view('products', [
            'products' => $products,
        ]);
    }

    //create new product
    public function create(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products');
    }

    //get products by price range minimum and maximum
    public function priceRange(Request $request){
        $min = $request->input('min');
        $max = $request->input('max');
        $products = Product::whereBetween('price', [$min, $max])->get();

        return view('products', [
            'products' => $products,
        ]);
    }


    

    

}
