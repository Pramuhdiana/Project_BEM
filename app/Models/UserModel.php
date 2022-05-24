<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    public function tambahdata($data)
    {
        DB::table('tbl_form')->insert($data); //fungsi untuk menambahkan data ke tbl_form
    }
    public function alldatabem()
    {
        return DB::table('tbl_form')->get();
    }
}
