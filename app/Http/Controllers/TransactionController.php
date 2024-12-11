<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('buyer_id', auth()->id())->get();
        return view('buyers.transaction', compact('transactions'));
    }

    public function purchase($productId)
    {
        $product = Product::findOrFail($productId);

        $transaction = new Transaction();
        $transaction->product_id = $product->id;
        $transaction->user_id = auth()->id();
        $transaction->save();
    return redirect()->route('products.index');
}

}
