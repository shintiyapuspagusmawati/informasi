<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    //
    protected $fillable = ['name'];
    protected $visible = ['name'];
    public $timestamps=true;
}
