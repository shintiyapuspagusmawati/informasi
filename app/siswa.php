<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $fillable = ['nis','foto','nama_guru','jenis_kelamin','tanggal_lahir','id_kelas','jurusan_id','alamat','no_telepon'];
    protected $visible = ['nis','foto','nama_guru','jenis_kelamin','tanggal_lahir','id_kelas','jurusan_id','alamat','no_telepon'];
    public $timestamps=true;

     public function siswa() 
    {
    	return $this->hasMany('App\siswa');
    }
}
