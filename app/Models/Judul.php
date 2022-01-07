<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judul extends Model
{
    use HasFactory;

    public function tahun()
    {
        return $this->belongsTo(Tahun::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function variabel()

    {

        return $this->hasMany(Variabel::class);

    }
}
