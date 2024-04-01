<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'species_id', 'habitat_id', 'caregiver_id'];

    public function species()
    {
        return $this->belongsTo(Especie::class, 'species_id');
    }

    public function habitat()
    {
        return $this->belongsTo(Recinto::class, 'habitat_id');
    }

    public function caregiver()
    {
        return $this->belongsTo(Cuidador::class, 'caregiver_id');
    }
}
