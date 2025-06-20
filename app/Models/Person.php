<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    // Opcional: Laravel automáticamente asume que la tabla es 'people'
    protected $table = 'people';

    protected static function boot()
    {
        parent::boot();

        /* C08: Un dato u otro (run o documento) */
        // Para validar que al menos uno de los campos 'run' o 'document_number' esté presente
        static::saving(function ($person) {
            if (empty($person->run) && empty($person->document_number)) {
                throw new \Exception('Debe ingresar al menos RUN o Document Number.');
            }
        });
    }
}
