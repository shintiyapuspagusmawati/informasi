<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $fillable = ['nis','foto','nis','nama_guru','jenis_kelamin','tanggal_lahir','id_kelas','jurusan_id','alamat','no_telepon'];
    protected $visible = ['nis','foto','nis','nama_guru','jenis_kelamin','tanggal_lahir','id_kelas','jurusan_id','alamat','no_telepon'];
    public $timestamps=true;
}
