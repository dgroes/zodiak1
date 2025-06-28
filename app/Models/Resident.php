<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resident extends Model
{
    // $fillable <-- Protege contra asignación masiva
    protected $fillable = [
        'run',
        'document_number',
        'names',
        'last_names',
        'apartment_id',
        'medical_disabilities'
    ];

    /*
        Relación con el depto (apartment)
        Un residente pertenece a un departamento
    */

    //Con belongsTo se define que un residente pertenece a un departamento
    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }
}
