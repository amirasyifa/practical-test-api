<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $res = Admin::all();
        
        return response($res);
    }

    public function create(request $request){
        
        Admin::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return response('Data berhasil dibuat');
    }

    public function update(request $request){
        $request->validate([
            'id'    => ['required', 'exists:Admins,id'],
            // 'name'  => ['min:3']
        ]);

        $Admin = Admin::find($request->id);
        $Admin->name = $request->name;
        $Admin->address = $request->address;
        $Admin->save();

        return response("Data Berhasil diUpdate");
    }

    public function delete(request $request){
        $Admin = Admin::find($request->id);
        $Admin->delete();

        return response("Data Berhasil diHapus");
    }
}
