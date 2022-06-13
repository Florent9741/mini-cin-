<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Realisateurs;
use App\Models\Salles;

class Films extends Model
{
    use HasFactory;

    public function realisateur()
    {
        return $this->belongsTo(Realisateurs::class, 'id_realisateur');
    }
    public function salle()
    {
        return $this->belongsTo(Salles::class, 'id_salle');
    }
}
