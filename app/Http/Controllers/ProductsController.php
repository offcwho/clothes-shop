<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::where('is_active', true)->orderByDesc('created_at')->get();

        return view('sections.index.arrivals', [
            'products' => $products
        ]);
    }
}
