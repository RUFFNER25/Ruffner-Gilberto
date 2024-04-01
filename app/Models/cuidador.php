<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuidador extends Model
{
    protected $fillable = ['name', 'specialty'];

    public function animals()
    {
        return $this->hasMany(Animal::class, 'caregiver_id');
    }
}
