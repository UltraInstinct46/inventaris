<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    public $table = 'peminjamans';
    protected $fillable =[
    	'id_peminjaman','status_peminjaman','id_pegawai'
    ];
}
