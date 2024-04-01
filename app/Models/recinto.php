<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    protected $fillable = ['name'];

    public function animals()
    {
        return $this->hasMany(Animal::class, 'habitat_id');
    }

    public function activities()
    {
        return $this->hasMany(Actividad::class, 'recinto_id');
    }
}
