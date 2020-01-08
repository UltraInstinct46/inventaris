<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpinjam extends Model
{
    protected $fillable =[
    	'id_detail_pinjam','id_inventaris','jumlah'
    ];
}
