<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
    protected $fillable = ['id_user','nipg','foto','nama_guru','jenis_kelamin','tanggal_lahir','id_mapel','alamat','no_telepon','email','password'];
    protected $visible = ['id_user','nipg','foto','nama_guru','jenis_kelamin','tanggal_lahir','id_mapel','alamat','no_telepon','email','password'];
    public $timestamps=true;

    public function mapel()
    {
    	return $this->HasMany('App\mapel', 'id_mapel');
    }

    public function user() 
    {
        return $this->BelongsTo('App\user', 'id_user');
    }

    protected $casts = [
        'kelas' => 'array',
    ];
}
