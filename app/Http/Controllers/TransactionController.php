<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show()
    {
        $res = Transaction::all();

        return response($res);
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => ['required'],
        ]);
        Transaction::create([
            'client_id' => $request->client_id,
            'admin_id' => $request->admin_id,
            'food' => $request->food,
            'price' => $request->price,
        ]);
        
        return response('Transaksi berhasil dibuat');
    }
}