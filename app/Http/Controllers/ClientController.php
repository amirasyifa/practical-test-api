<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $res = Client::all();
        
        return response($res);
    }

    public function create(request $request){
        
        Client::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return response('Data berhasil dibuat');
    }

    public function update(request $request){
        $request->validate([
            'id'    => ['required', 'exists:clients,id'],
            // 'name'  => ['min:3']
        ]);

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->address = $request->address;
        $client->save();

        return response("Data Berhasil diUpdate");
    }

    public function delete(request $request){
        $client = Client::find($request->id);
        $client->delete();

        return response("Data Berhasil diHapus");
    }
}