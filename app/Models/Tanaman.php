<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanamen';

    protected $fillable = [
        'nama', 'deskripsi', 'manfaat', 'asal_daerah', 'foto'
    ];
}