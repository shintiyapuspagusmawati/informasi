<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    //
    protected $fillable = ['name'];
    protected $visible = ['name'];
    public $timestamps=true;

    public function kelas()
    {
    	return $this->belongsTo('App\kelas', 'kelas');
    }
}
