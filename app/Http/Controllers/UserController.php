<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data= DB::table('_users_')->get();

        return view('index', [
            'users' => $data
        ]);

    }

    public function create(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
    
        $user = DB::table('_users_')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address
        ]);
    
        return redirect()->route('display')->with('success', 'User created successfully!');
    }
    
}