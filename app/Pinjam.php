<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjams';
    protected $fillable = [
        'nama_user', 'nama_item', 'lama_pinjam', 'total_bayar'
    ];
}
