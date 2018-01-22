<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    //
    protected $fillable = ['id','name'];
    protected $visible = ['id','name'];
    public $timestamps=true;

    public function guru() 
    {
    	return $this->BelongsTo('App\guru', 'id_mapel');
    }

    public function User()
    {
    	return $this->belongsTo('App\User', 'id');
    }
}
