<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanamen';

    protected $fillable = [
    'nama', 'deskripsi', 'manfaat', 'asal_daerah', 'foto', 'kategori'
    ];

public function favoritedByUsers()
{
    return $this->belongsToMany(User::class, 'favorites', 'tanaman_id', 'user_id')->withTimestamps();
}

}