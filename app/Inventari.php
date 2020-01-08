<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventari extends Model
{
    protected $fillable =[
    	'id_inventaris','nama','kondisi','keterangan','jumlah','id_jenis','id_ruang','id_petugas'
    ];
}
