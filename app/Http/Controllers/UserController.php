<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('/v_home');
    }

    public function form()
    {
        return view('form');
    }

    public function tambah()
    {

        //simpan data
        //upload file 
        $foto = Request()->foto;
        $namafile = Request()->name . '.' . $foto->extension();
        $foto->move(public_path('foto'), $namafile);
        $fullname = Request()->name . ' ' . Request()->lastname;
        //masukan ke database
        $data = [
            'nik' => Request()->nik,
            'name' => $fullname,
            'jenis_kelamin' => Request()->jk,
            'ttl' => Request()->ttl,
            'jurusan' => Request()->jurusan,
            'alamat' => Request()->alamat,
            'foto' => $namafile,
        ];
        $this->UserModel->tambahdata($data);
        return redirect()->route('dashboard');
    }

    public function databem()
    {
        $data = [
            'form' => $this->UserModel->alldatabem(),
        ];
        return view('databem', $data);
    }
}
