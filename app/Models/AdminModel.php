<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminModel extends Model
{
    public function alldatauser()
    {
        return DB::table('users')->get();
    }
    public function alldataform()
    {
        return DB::table('tbl_form')->get();
    }
    public function hapusbem($id)
    {
        return DB::delete('delete from tbl_form where id = ?', [$id]); //fungsi untuk menghapus data by ID di tbl_form
    }
    public function hapususer($id)
    {
        return DB::delete('delete from users where id = ?', [$id]);
    }
    public function detailform($id)
    {
        return DB::table('tbl_form')->where('id', $id)->first();
    }
    public function updatedatabem($id, $data)
    {
        return DB::table('tbl_form')
            ->where('id', $id)
            ->update($data);
    }
    public function updatedatauser($id, $data)
    {
        return DB::table('users')
            ->where('id', $id)
            ->update($data);
    }
    public function detailuser($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }
}
