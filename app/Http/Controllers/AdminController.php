<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }

    public function datauser()
    {
        $data = [
            'user' => $this->AdminModel->alldatauser(),

        ];
        return view('datauser', $data);
    }
    public function dataform()
    {
        $data = [
            'form' => $this->AdminModel->alldataform(),
        ];
        return view('dataform', $data);
    }

    public function deletebem($id)
    {
        $data = [
            'form' => $this->AdminModel->hapusbem($id),
        ];
        return redirect()->route('dataform')->with('Pesan', 'Data telah berhasil di hapus');
    }
    public function deleteuser($id)
    {
        $data = [
            'user' => $this->AdminModel->hapususer($id),
        ];
        return redirect()->route('datauser')->with('Pesan', 'Data telah berhasil di hapus');
    }

    //fungsi edit
    public function editbem($id)
    {
        $data = [
            'form' => $this->AdminModel->detailform($id),
        ];
        return view('v_editform', $data);
    }

    public function updatebem($id)
    {
        $foto = Request()->foto;
        $namafile = Request()->name . '.' . $foto->extension();
        $foto->move(public_path('foto'), $namafile);

        // masukan ke database untuk mengupdate wali dan catatan
        $data = [

            'nik' => Request()->nik,
            'name' => Request()->name,
            'jenis_kelamin' => Request()->jk,
            'ttl' => Request()->ttl,
            'jurusan' => Request()->jurusan,
            'alamat' => Request()->alamat,
            'foto' => $namafile,
        ];

        $this->AdminModel->updatedatabem($id, $data);
        return redirect()->route('dataform');
    }
    public function edituser($id)
    {
        $data = [
            'user' => $this->AdminModel->detailuser($id),
        ];
        return view('v_edituser', $data);
    }

    public function updateuser($id)
    {
        $hashpassword = bcrypt(Request()->password);
        // masukan ke database untuk mengupdate wali dan catatan
        $data = [
            'name' => Request()->name,
            'level' => Request()->level,
            'email' => Request()->email,
            'password' => Request()->password,
        ];
        $this->AdminModel->updatedatauser($id, $data);
        return redirect()->route('datauser');
        dd($data);
    }
}
