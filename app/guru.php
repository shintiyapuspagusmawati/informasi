<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
    protected $fillable = ['id','foto','nipg','nama_guru','jenis_kelamin','tanggal_lahir','id_mapel','alamat','no_telepon'];
}
