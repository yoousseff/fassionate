<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('product_name', 'LIKE', "%{$query}%")
            ->orWhere('product_description', 'LIKE', "%{$query}%")
            ->orWhere('product_category', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($products);
    }
}
