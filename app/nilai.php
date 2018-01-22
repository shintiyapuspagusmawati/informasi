<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    //
    protected $fillable = ['nama','kkm','uh1','uh2','uh3','uh4','uts','uas'];
    protected $visible = ['nama','kkm','uh1','uh2','uh3','uh4','uts','uas'];
    public $timestamps=true;

    public function siswa()
    {
    	return $this->belongsTo('App\siswa', 'nama');
    }
}
