<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function product_list()
    {
        return view('product_list');
    }
}
