<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $table = 'staffs';

    protected static function boot()
    {
        parent::boot();

        /* C08: Un dato u otro (run o documento) */
        // Para validar que al menos uno de los campos 'run' o 'document_number' esté presente
        /* C10: Evento de modelo Eloquent */
        static::saving(function ($staff) {
            if (empty($staff->run) && empty($staff->document_number)) {
                throw new \Exception('Debe ingresar al menos RUN o Document Number.');
            }
        });
    }
}
