<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $searchTerm . '%');
        }

        $products = $query->paginate(10);

        return view('products.index', compact('products'));
    }



    public function create()
    {
        return view('sellers.product.insert');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'type' => 'required',
            'location' => 'required',
        ]);

        $path = $request->file('image')->store('products');

        Product::create(array_merge($validated, ['image' => $path, 'seller_id' => auth()->id()]));

        return redirect()->route('sellers.home');
    }
}
