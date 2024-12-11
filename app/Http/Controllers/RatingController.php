<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        return view('buyer.rating');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'store_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Rating::create(array_merge($validated, ['user_id' => auth()->id()]));

        return redirect()->route('buyers.rating');
    }
}
