<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $fillable = ['id','foto','nis','nama_guru','jenis_kelamin','tanggal_lahir','id_kelas','jurusan_id','alamat','no_telepon'];
}
