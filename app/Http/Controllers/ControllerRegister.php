<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ControllerRegister extends Controller

{
    public function index()
    {
        return view('register.register', [
            'title' => 'register',
            'active' => 'register'

        ]);
    }

    public function store(Request $request)
    {


        $validatedata =  $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'

        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);

        User::create($validatedata);

        return redirect('/login')->with('berhasil', 'berhasil terdaftar silahkan login');
    }
}