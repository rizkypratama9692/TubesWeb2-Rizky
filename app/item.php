<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'items';
    protected $fillable = [
        'jenis_item', 'nama_item', 'gambar_item' ,'status_item', 'harga_item', 'deskripsi_item'
    ];
}
