<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    protected $fillable = [
        'keterangan','deposit','tahun','bulan', 'user'
    ];
}
