<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeni extends Model
{
    protected $fillable =[
    	'id_jenis','nama_jenis','kode_jenis','keterangan'
    ];
}
