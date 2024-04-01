<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = ['name', 'day', 'time'];

    public function recinto()
    {
        return $this->belongsTo(Recinto::class, 'recinto_id');
    }
}
