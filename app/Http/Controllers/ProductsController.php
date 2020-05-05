<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    //
    function showProducts(){
        $products = DB::select('select * from products');
        return view('pages.products')->with('products', $products);
    }
}
