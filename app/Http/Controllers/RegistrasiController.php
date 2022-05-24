<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'level' =>['required', 'min:3', 'max:255'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //hash password cara 1
        //$validatedData['password'] = bcrypt($validatedData['password']);
        //hash password cara 2 (seperti di dokumentasi laravel)
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //pesan
        $request->session()->flash('success', 'Regsitrasi berhasil');
        return redirect('/login');
      

    }
}
