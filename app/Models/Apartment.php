<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Apartment extends Model
{
    protected $fillable = [
        'owner_id',
        'tower_id',
        'number',
        'details',
        'is_available'
    ];

    //Relación con el propietario 🔑
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    // Relación con la Torre 🏢
    public function tower(): BelongsTo
    {
        return $this->belongsTo(Tower::class);
    }

    /*
        Relación con los residentes 👨‍👩‍👦‍👦
        Un departamento puede tener muchos residentes
    */
    public function residents(): HasMany
    {
        return $this->hasMany(Resident::class);
    }
}
