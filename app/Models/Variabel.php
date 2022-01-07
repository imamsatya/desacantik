<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    use HasFactory;

    public function values()

    {

        return $this->hasMany(Values::class);

    }

    public function judul()
    {
        return $this->belongsTo(Judul::class);
    }
}
