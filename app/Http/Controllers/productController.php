<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\shop;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{

    public function add_product()
    {
        $shops = shop::all();
        return view('add_product',compact('shops'));
    }

    public function store_product(Request $request)
    {
        // code...
    }


    public function show_products()
    {
        $products = DB::table('products')
            ->leftJoin('shops', 'shops.id', '=', 'products.shop_id')
            ->get();
        return view('show_products', compact('products'));
            // dd($products[0]->product_name);
    }

    
}
